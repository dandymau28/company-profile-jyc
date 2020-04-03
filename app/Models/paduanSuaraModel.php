<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class paduanSuaraModel extends Model
{
    use SoftDeletes;
    protected $table = 'paduan_suara';
    protected $fillable = [
        'id_cab',
        'nama_padus',
        'ambitus',
        'tahun_aktif'
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
