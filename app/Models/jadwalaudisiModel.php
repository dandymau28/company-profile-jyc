<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwalaudisiModel extends Model
{
    protected $table = 'jadwal_audisi';
    protected $fillable = [
        'tanggal',
        'kuota',
        'jumlah_pendaftar',
        'link_grup'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function cab()
    {
        return $this->hasMany('App\Models\cabModel','id_audisi','id');
    }
}
