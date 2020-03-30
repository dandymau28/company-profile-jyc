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
        'tgl_publish',
        'id_user',
        'isi_berita',
        'slug',
        'banner',
        'tag'
    ];

    protected $dates = ['deleted_at'];
}
