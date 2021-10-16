<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Barang;
use Carbon\Carbon;

class Cart extends Component
{
    public $nama_barang,$gambar,$jumlah_barang,$jenis_barang,$kategori_id,$lokasi;
    public $tax="0%";

    public function render()
    {
        $barang = Barang::orderBy('created_at','DESC')->get();
        $condition = new \Darryldecode\Cart\CartCondition([
            'name'=>'nama_barang',
            'type'=>'tax',
            'target'=>'total',
            'value'=>$this->tax,
            'order'=>1
        ]);
        \Cart::session(Auth()->id())->condition($condition);
        $items=\Cart::session(Auth()->id())->getContent()->sortBy(function($cart){
            return $cart->attributes->get('added_at');
        });
        if (\Cart::isEmpty()) {
            $cartData=[];
        }else{
            foreach ($items as  $item) {
                $cart[] = [
                    'rowId' => $row->id,
                    'nama_barang'=>$item->nama_barang,
                    'jumlah_barang'=>$item->quantity,
                ];
            }
            $cartData = collect($cart);

        }

        return view('livewire.cart',[
            'barang'=>$barang,
            'carts'=>$cartData
        ]);
    }

    public function addItem($id)
    {
        dd($id);
        $rowId = "Cart".$id;
        $cart=\Cart::sesion(Auth()->id)->getContent;
        $cekitemId = $cart->whereIn('id',$rowId);
        if ($cekitemId->isNotEmpty( )) {
            \Cart::sesion(Auth()->id)->update($rowId,[
                'quantity'=>[
                    'relative'=>true,
                    'value'=>1
                ]
            ]);
           
        }else{
            $barang = Barang::findOrFail($id);
            \Cart::sesion(Auth()->id())->add(
                [
                    'id'=>"cart".$barang->$id,
                    'nama_barang'=>$barang->nama_barang,
                    'quantity'=>1,
                    'attributes'=>[
                        'added_at'=>Carbon::now(

                        )
                    ]
                ]
            );
        }
       
    }
}
