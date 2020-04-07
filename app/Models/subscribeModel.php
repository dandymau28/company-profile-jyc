<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subscribeModel extends Model
{
    protected $table = 'subcribe';
    protected $fillable = [
        'email'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
