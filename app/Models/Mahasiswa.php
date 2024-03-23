<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nim'];

    public function wali()
    {
        return $this->hasONe('App\Models\Wali', 'id_mahasiswa');
    }

    public function dosen()
    {
        return $this->belongsTo('App\Models\Mahasiswa', 'id_dosen');
    }

   public function hobi()
    {
        return $this->belongsToMany('App\Models\Hobi', 'mahasiswa_hobi', 'id_mahasiswa', 'id_hobi');
    }



}
