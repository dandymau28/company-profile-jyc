<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class videoModel extends Model
{
    use SoftDeletes;
    protected $table = 'video';
    protected $fillable = [
        'alamat',
        'id_user'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
