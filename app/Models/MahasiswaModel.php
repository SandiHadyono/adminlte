<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table='mahasiswa';
    protected $primarykey='nim';
    public function alamat(){
        return $this->hasOne('App\Models\AlamatModel', 'id', 'id_alamat');
    }
    public function wali(){
        return $this->hasOne('App\Models\DosenModel', 'nidn', 'dosen_wali');
    }
    public function ambilnilai(){
        return $this->hasMany('App\Models\NilaiModel', 'nim_dinilai', 'nim');
    }
}
