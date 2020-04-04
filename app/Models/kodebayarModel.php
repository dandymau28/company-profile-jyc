<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kodebayarModel extends Model
{
    protected $table = 'kode_pembayaran_cab';
    protected $fillable = [
        'id_cab',
        'kode_bayar',
        'foto_bukti'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cab()
    {
        return $this->belongsTo('App/Models/cabModel','id_cab');
    }
}
