<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    use HasFactory;

    //model resep menghandle tabel resep
    protected $table = 'resep';

    protected $fillable = ['id','nama', 'bahan', 'cara','kategori','gambar','namagambar'];
}
