<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadModel extends Model
{
    use HasFactory;
    protected $table        = "resep";
    protected $primaryKey   = 'id';
    protected $fillable     = ['id','nama','bahan','cara','view','kategori','gambar','namagambar'];

}

