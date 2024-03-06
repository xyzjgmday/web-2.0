<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Dosen; // tambahkan penggunaan namespace model Dosen
use DB;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete(); // ubah titik dua (:) menjadi arrow operator (::)

        $dosen = Dosen::create(array( // tambahkan namespace pada model Dosen
            'nama' => 'Eko',
            'nipd' => '1234567890',
        ));

        // Buat sample 3 mahasiswa
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
        
        $this->command->info('Data Mahasiswa dosen                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   dan Wali telah diisi!');
    }
}
