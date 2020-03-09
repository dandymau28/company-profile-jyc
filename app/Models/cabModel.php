<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cabModel extends Model
{
    use SoftDeletes;
    protected $table = "cab";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama_lengkap',
        'umur',
        'status_nikah',
        'pekerjaan',
        'no_hp',
        'ambitus',
        'tempat_lahir',
        'tanggal_lahir',
        'kemampuan_musik',
        'tingkat_keahlian',
        'keahlian_non_musik',
        'domisili',
        'emergency_call'
    ];
}
