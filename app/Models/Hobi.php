<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;

    protected $fillable = ['hobi'];

    public function mahasiswa()
    {
        return $this->belongsToMany('App\Models\Mahasiswa',
            'mahasiswa_hobi',
            'id_hobi',
            'id_mahasiswa');
    }
}
