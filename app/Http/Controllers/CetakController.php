<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventarisBarang;
use App\Models\Ruangan;
use App\Models\Barang;

class CetakController extends Controller
{
    public function cetak($id)
    {
        $inventaris=InventarisBarang::where('ruang_id',$id)->get();
        $ruangan=Ruangan::all();
        $barang=Barang::all();
        return view('vendor.voyager.inventaris-barangs.print',['ruangan'=>$ruangan,'barang'=>$barang ],compact('inventaris','ruangan','barang'));
    }
    
    

}
