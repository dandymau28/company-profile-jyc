<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategoriModel extends Model
{
    use SoftDeletes;
    protected $table = "kategori";
    protected $fillable = [
        'nama_kategori',
        'jumlah_berita'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
