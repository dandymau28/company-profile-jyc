<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kegiatanModel extends Model
{
    use SoftDeletes;
    protected $table = 'kegiatan';
    protected $fillable = [
        'nama',
        'jenis'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function foto()
    {
        return $this->hasMany('App/Models/fotoModel','id_kegiatan','id');
    }
}
