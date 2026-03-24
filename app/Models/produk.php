<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //inisialisasi tabel produk
    protected $table ='produks';

    //inisialisasi primary key dalam tabel
    protected $primaryKey = 'id_produk';

    //inisialisasi array apa saja yang boleh diisi dalam tabel
    // protected $fillable = ['
    // nama_produk',
    // 'harga',
    // 'deskripsi_produk',
    // 'kategori_id'
    // ];
    
    //inisialisasi data yang tidak boleh di isi dalam tabel
    protected $guarded = ['id_produk'];
    // public $timestamps = false;
}
