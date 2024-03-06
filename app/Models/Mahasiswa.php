<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public function wali()
    {
        return $this->hasONe('App\Models\Wali', 'id_mahasiswa');
    }
}
