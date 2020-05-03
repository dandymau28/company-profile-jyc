<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FotoModel extends Model
{
    protected $table = 'foto';
    
    protected $fillable = [
        'id',
        'alamat_foto',
        'kategori',
        'deskripsi'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
