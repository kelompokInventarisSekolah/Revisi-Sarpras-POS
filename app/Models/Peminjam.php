<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Barang;

class Peminjam extends Model
{
    use HasFactory;

    public $table = "peminjams";
    protected $fillable = ['id_peminjam','barang_id','ruangan_id','tujuan_peminjam','qty','kode_pinjaman'];
    // protected $with = ['pembeli'];
    // public function pembeli(){
    //     return $this->belongsTo( Barang::class,'barang_id');
    // }
    public function nama(){
        return $this->belongsTo(Barang::class,'barang_id');
    }

}

