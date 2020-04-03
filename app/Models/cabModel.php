<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cabModel extends Model
{
    use SoftDeletes;
    protected $table = "cab";
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

    protected $dates = ['created_at','updated_at','deleted_at'];

    public function prestasiKesenian()
    {
        return $this->hasMany('App\Models\prestasiKesenianModel','id_cab','id');
    }

    public function prestasiNonkesenian()
    {
        return $this->hasMany('App\Models\prestasiNonkesenianModel','id_cab','id');
    }

    public function riwayatOrganisasi()
    {
        return $this->hasMany('App\Models\riwayatOrganisasiModel','id_cab','id');
    }

    public function kemampuanBermusik()
    {
        return $this->hasMany('App\Models\kemampuanBermusikModel','id_cab','id');
    }

    public function paduanSuara()
    {
        return $this->hasMany('App\Models\paduanSuaraModel','id_cab','id');
    }
}
