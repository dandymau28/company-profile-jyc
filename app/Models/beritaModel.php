<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class beritaModel extends Model
{
    use SoftDeletes;
    protected $table = 'berita';
    protected $fillable = [
        'id',
        'judul',
        'kategori',
        'status',
        'id_user',
        'isi_berita',
        'slug',
        'banner',
        'tgl_publish',
        'tag'
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
