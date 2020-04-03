<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kemampuanBermusikModel extends Model
{
    use SoftDeletes;
    protected $table = 'kemampuan_bermusik';
    protected $fillable = [
        'id_cab',
        'alat_musik',
        'tingkat_kemampuan',
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
