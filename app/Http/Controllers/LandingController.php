<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Ruangan;
use App\Models\Peminjam;

class LandingController extends Controller
{
    public function index(){
        
        $barang = Barang::all();
        $pembeli = Peminjam::all();
        
        // $barang_id = Barang::where('id_barang',$id)->get();
        $ruangan = Ruangan::all();
        $tanggals = Carbon::now()->format('y-m-d');
        $now = Carbon::now();
        $thnBulan = $now->year . $now->month;
        $cek= Peminjam::count();
        if ($cek == 0) {
            $urut = 10000001;
            $nomor= 'PMJ'. $thnBulan . $urut;
            // dd($nomor);
        }else{
            $ambil = Peminjam::all()->last();
            $urut =(int)substr($ambil->id,-8)+1;
            $nomor= 'PMJ'. $thnBulan . $urut;
        }

       
        

        return view('main',['barang'=>$barang , 'pembeli'=>$pembeli],compact('ruangan', 'barang' , 'pembeli','tanggals','nomor'));
    }
    
    public function tambah_peminjam(Request $request)
    {
        // dd($request);
        Peminjam ::create([
            'id_peminjam' => $request['id_peminjam'],
            'ruangan_id' => $request['ruangan_id'],
            'barang_id' => $request['barang_id'],
            'tujuan_peminjam' => $request['tujuan_peminjam'],
            'qty' => $request['qty'],
            'kode_pinjaman' => $request['kode_pinjaman']
        ]);
        
        return redirect()->route('nampil')->with('success', 'Buka List Pinjaman Lalu GenerateQR Sesuai Barang Lalu SS Beri Ke Petugas');
    }
    public function generate ($id)
    {
        $barang = Barang::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($barang->lokasi);
        return view('qrcode',compact('qrcode'));
    }
    // public function generate1 ($id)
    // {
    //     $peminjam = Peminjam::findOrFail($id);
    //     $qrcode = QrCode::size(400)->generate($peminjam->id);
    //     return view('qrcodep',compact('qrcode'));
    // }
    

    
}