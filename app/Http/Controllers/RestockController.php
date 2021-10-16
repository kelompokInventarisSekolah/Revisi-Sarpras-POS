<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restock;
use App\Models\Barang;

class RestockController extends Controller
{
    public function print()
    {
        $restock = Restock::all();
        $nama = Barang::all();
        return view('print',['restock'=>$restock ,'nama'=>$nama ],compact('restock','nama'));
    }
}
