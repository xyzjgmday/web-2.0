<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $filllable = ['nama', 'nipd'];

    public function mahasiswa()
    {
        return $this->hasMany('App\Models\Mahasiswa', 'id_dosen');
    }
}
