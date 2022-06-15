<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table= "matkul";
    protected $primarykey = "id";
    protected $fillable = ['id', 'kode_matkul', 'nama_matkul', 'jum_sks', 'prodi'];

    public function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
}

// test
