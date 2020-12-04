<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DosenModel extends Model
{
    use HasFactory;
    protected $table ='dosen';
    public function alamat(){
        return $this->hasOne('App\Models\AlamatModel','id','id_alamat');
    }
    public function walimahasiswa(){
        return $this->hasMany('App\Models\MahasiswaModel','dosen_wali','nidn');
    }
    public function ambilnilai(){
        return $this->hasMany('App\Models\NilaiModel','nidn_penilai','nidn');
    }
    use SoftDeletes;
}
