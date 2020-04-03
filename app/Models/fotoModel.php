<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FotoModel extends Model
{
    protected $table = 'foto';
    protected $fillable = [
        'id',
        'id_kegiatan',
        'alamat_foto',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function kegiatan()
    {
        return $this->belongsTo('App/Models/kegiatanModel','id_kegiatan');
    }
}
