<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subscribeModel extends Model
{
    use SoftDeletes;
    protected $table = 'subscribe';
    protected $fillable = [
        'email'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
