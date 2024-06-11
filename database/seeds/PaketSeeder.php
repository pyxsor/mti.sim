<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            'id' => 1,
            'ket' => 'Bisnis kontruksi dan Properti',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 2,
            'ket' => 'Desain Permodelan dan Informasi Bangunan',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 3,
            'ket' => 'Elektronika Industri',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 4,
            'ket' => 'Otomasi Industri',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 5,
            'ket' => "Teknik Pemesinan",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 6,
            'ket' => 'Teknik dan Bisnis Sepeda Motor',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 7,
            'ket' => 'Rekayasa Perangkat Lunak',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('paket')->insert([
            'id' => 8,
            'ket' => "Teknik Pengelasan",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);


        DB::table('mapel')->insert([
            'id' => 1,
            'kode_mk'=>'IND',
            'nama_mapel' => 'Bahasa Indonesia',
            'jenis_mk' => 'wajib',
            // 'kelompok' => 'A',
            'sks'=>'3',
            'semester'=>'2',
            'tahun' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 2,
            'kode_mk'=>'ENG',
            'nama_mapel' => 'Bahasa Inggris',
            'jenis_mk' => 'wajib',
            // 'kelompok' => 'A',
            'sks'=>'3',
            'semester'=>'2',
            'tahun' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 3,
            'kode_mk'=>'MTK',
            'nama_mapel' => 'Matematika',
            'jenis_mk' => 'wajib',
            // 'kelompok' => 'A',
            'sks'=>'3',
            'semester'=>'2',
            'tahun' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 4,
            'kode_mk'=>'AGM',
            'nama_mapel' => 'Pendidikan Agama dan Budi Pekerti',
            'jenis_mk' => 'pilihan',
            // 'kelompok' => 'A',
            'sks'=>'3',
            'semester'=>'2',
            'tahun' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('mapel')->insert([
            'id' => 5,
            'kode_mk'=>'PKN',
            'jenis_mk' => 'pilihan',
            'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'jenis_mk' => 'pilihan',
            // 'kelompok' => 'A',
            'sks'=>'3',
            'semester'=>'2',
            'tahun' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
