<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function showMahasiswa()
    {
        $mahasiswas = Mahasiswa::with('hobis', 'wali', 'dosen')->get();
        return view('mahasiswa', compact('mahasiswas'));
    }
}
