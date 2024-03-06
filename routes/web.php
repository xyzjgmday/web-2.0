<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Relasi 1 - one to one
Route::get('relasi-1', function() {
    // Temukan mahasiswa
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', 'D015015072')->first();

    // tampilkan nama wali
    return $mahasiswa->wali->nama;
});

// Relasi one to Many
Route::get('relasi-2', function() {
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', 'D015015072')->first();
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {
    $dosen = App\Models\Dosen::where('nama', '=', 'Eko')->first();
    foreach ($dosen->mahasiswa as $temp) {  
        echo '<li style="margin-bottom: 10px;">';
        echo '<span style="font-weight: bold;">Nama: </span>' . $temp->nama . '<br>';
        echo '<span style="font-weight: bold;">NIM: </span>' . $temp->nim;
        echo '</li>';

    }
});