<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class penghargaanModel extends Model
{
    use SoftDeletes;
    protected $table = 'penghargaan';
    protected $fillable = [
        'prestasi_id',
        'gelar',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function prestasi()
    {
        return $this->belongsTo('App\Models\prestasiModel', 'prestasi_id');
    }
}
