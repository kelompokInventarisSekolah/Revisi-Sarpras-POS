<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Peminjam;

class Barang extends Model
{
    use HasFactory;
    protected $with = ['barang'];
   
    public function barang(){
        return $this->belongsTo(KategoriBarang::class,'kategori_id');
    }
    // // public function nama(){
    // //     return $this->hasOne('App\Models\Peminjam');
    // // }
}
