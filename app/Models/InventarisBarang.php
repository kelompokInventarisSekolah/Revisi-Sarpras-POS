<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarisBarang extends Model
{
    use HasFactory;
    public $table = "inventaris_barangs";

    protected $fillable = ['ruang_id','barang_id','spesifikasi','jumlah','kondisi_baik','kondisi_rusak_ringan','kondisi_rusak_berat','keterangan'];

    public function ruangan(){
        return $this->belongsTo(Ruangan::class,'ruang_id');
    }
    public function barang(){
        return $this->belongsTo(Barang::class,'barang_id');
    }
}

