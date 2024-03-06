<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Wali;
use DB;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        // Buat sample 3 mahasiswa
        $ani = Mahasiswa::create(array(
            'nama' => 'Ani',
            'nim' => 'D015015072'));

        $budi = Mahasiswa::create(array(
            'nama' => 'Budi',
            'nim' => 'D015015088'));

        $nia = Mahasiswa::create(array(
            'nama' => 'Nia',
            'nim' => 'D015015078'));

        // Informasi ketika Mahasiswa diisi
        $this->command->info('Mahasiswa telah diisi!');

        // Menciptakan wali masing-masing mahasiswa
        Wali::create(array(
            'nama' => 'Henny A',
            'id_mahasiswa' => $ani->id,));

        Wali::create(array(
            'nama' => 'Andi S',
            'id_mahasiswa' => $budi->id,));

        Wali::create(array(
            'nama' => 'Viki D',
            'id_mahasiswa' => $nia->id,));
        
        $this->command->info('Data Mahasiswa dan Wali telah diisi!');


    }
}
