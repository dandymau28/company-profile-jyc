<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fotoModel extends Model
{
    use SoftDeletes;
    protected $table = 'foto';
    
    protected $fillable = [
        'id',
        'deskripsi',
        'alamat_foto',
        'id_kategori'
    ];

    protected $dates =
    [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
