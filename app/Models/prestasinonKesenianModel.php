<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class prestasinonKesenianModel extends Model
{
    use SoftDeletes;
    protected $table = 'prestasi_nonkesenian_cab';
    protected $fillable = [
        'id_cab',
        'nama_kegiatan',
        'tempat',
        'tingkat',
        'juara'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cab()
    {
        return $this->belongsTo('App\Models\cabModel','id_cab');
    }
}
