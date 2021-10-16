<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Peminjam;
use App\Models\User;

class ListpinjamanController extends Controller
{
    public function tampil($id)
    {
        $keranjang=Peminjam::where('id_peminjam',$id)->get();
        $user=User::where('id',$id)->get();
        return view('listpinjaman',['keranjang'=>$keranjang  ],compact('keranjang','user'));
    }

    public function generate ($id)
    {
        $keranjang = Peminjam::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($keranjang->kode_pinjaman);
        return view('qrcodePeminjam',compact('qrcode'));
    }
}
