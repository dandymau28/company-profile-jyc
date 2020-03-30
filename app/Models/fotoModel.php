<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FotoModel extends Model
{
    use SoftDeletes;
    protected $table = 'foto';
    protected $fillable = [
        'id',
        'id_kegiatan',
        'alamat_foto',
    ];

    protected $dates = ['deleted_at'];
}
