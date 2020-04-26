<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kotakSuratModel extends Model
{
    use SoftDeletes;
    protected $table = 'kotak_surat';
    protected $fillable = [
        'email',
        'nama',
        'isi_surat'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
