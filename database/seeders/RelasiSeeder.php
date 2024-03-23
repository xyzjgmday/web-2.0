<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Dosen;
use App\Models\Hobi;

use DB;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa_hobi')->delete(); // Menghapus data dari tabel pivot terlebih dahulu
        DB::table('walis')->delete(); // Menghapus data dari tabel walis
        DB::table('mahasiswas')->delete(); // Menghapus data dari tabel mahasiswas
        DB::table('dosens')->delete(); // Menghapus data dari tabel dosens
        DB::table('hobis')->delete(); // Menghapus data dari tabel hobis

        // Buat sample hobi
        $menulis = Hobi::create(array('hobi' => 'Menulis'));
        $baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));

        // Buat sample dosen
        $dosen = Dosen::create(array( 
            'nama' => 'Eko',
            'nipd' => '1234567890',
        ));

        // Buat sample mahasiswa
        $ani = Mahasiswa::create(array(
            'nama' => 'Ani',
            'nim' => 'D015015072',
            'id_dosen' => $dosen->id,
        ));

        $budi = Mahasiswa::create(array(
            'nama' => 'Budi',
            'nim' => 'D015015088',
            'id_dosen' => $dosen->id,
        ));

        $nia = Mahasiswa::create(array(
            'nama' => 'Nia',
            'nim' => 'D015015078',
            'id_dosen' => $dosen->id,
        ));

        // Assign hobi ke mahasiswa
        $ani->hobi()->attach($menulis->id);
        $budi->hobi()->attach($baca_buku->id);
        $nia->hobi()->attach($menulis->id);

        // Informasi ketika Mahasiswa diisi
        $this->command->info('Mahasiswa telah diisi!');

        // Menciptakan wali masing-masing mahasiswa
        Wali::create(array(
            'nama' => 'Henny A',
            'id_mahasiswa' => $ani->id,
        ));

        Wali::create(array(
            'nama' => 'Andi S',
            'id_mahasiswa' => $budi->id,
        ));

        Wali::create(array(
            'nama' => 'Viki D',
            'id_mahasiswa' => $nia->id,
        ));
        
        $this->command->info('Data Mahasiswa, Dosen, Wali dan Hobi telah diisi!');
    }
}
