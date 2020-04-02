<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prestasiModel extends Model
{
    use SoftDeletes;
    protected $table = 'prestasi';
    protected $fillable = [
        'nama_kompetisi',
        'kota',
        'negara',
        'tgl_mulai',
        'tgl_selesai',
        'logo_kompetisi',
        'foto_tim',
        'foto_piala',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function penghargaans()
    {
        return $this->hasMany('App\Models\penghargaanModel');
    }
}
