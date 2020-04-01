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
        'gelar_juara',
        'lokasi',
        'tanggal_kompetisi'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
