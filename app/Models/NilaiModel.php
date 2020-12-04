<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiModel extends Model
{
    use HasFactory;
    protected $table='nilai';
    public function mahasiswa(){
        return $this->hasOne('App\Models\MahasiswaModel','nim','nim_dinilai');
    }
    public function matkul(){
        return $this->hasOne('App\Models\MatkulModel','kode','matkul_dinilai');
    }
}
