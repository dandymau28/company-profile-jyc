<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class oprecModel extends Model
{
    use SoftDeletes;
    protected $table = 'info_oprec';
    protected $fillable = [
        'batas_pendaftar',
        'batas_kandidat',
        'batch'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
