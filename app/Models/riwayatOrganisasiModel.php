<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class riwayatOrganisasiModel extends Model
{
    use SoftDeletes;
    protected $table = 'riwayat_organisasi';
    protected $fillable = [
        'id_cab',
        'nama_organisasi',
        'jabatan',
        'tahun_aktif',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cab()
    {
        return $this->belongsTo('\App\Models\cabModel','id_cab');
    }
}
