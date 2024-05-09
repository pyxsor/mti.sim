<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); // Membuat instance Faker dengan lokal Indonesia

        for ($i = 0; $i < 10; $i++) {
            DB::table('guru')->insert([
                'id_card'=>$faker->isbn10,
                'nip'=>$faker->isbn10,
                'nama_guru' => $faker->name,
                'mapel_id' =>$faker->randomDigitNot(0),
                'kode' =>$faker->randomDigitNot(0),
                'jk' =>$faker->randomElement(['L' , 'P']),
                // 'jk' =>$faker->title($gender = null|'L'|'P'),
                'telp' => $faker->e164PhoneNumber(),
                'tmp_lahir' =>$faker->city,
                'tgl_lahir' =>$faker->date(),
                'foto' =>$faker->imageUrl(640,480,'animals',true),
                // 'alamat' => $faker->address,
                //'email' => $faker->email
            ]);
        }
    }
}
