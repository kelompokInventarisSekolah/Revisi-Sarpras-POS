<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restock extends Model
{
    use HasFactory;
    public $table = "restocks";
    protected $fillable = ['id_barang', 'jumlah_beli', 'harga'];
    public function nama(){
        return $this->belongsTo(Barang::class,'id_barang');
    }

}
