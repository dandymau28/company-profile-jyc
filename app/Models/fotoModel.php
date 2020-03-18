<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fotoModel extends Model
{
    use SoftDeletes;

    protected $table = 'foto';
    public $timestamps = true;
    protected $fillable = [
        'id',
        'id_kegiatan',
        'alamat_foto',
    ];
}
