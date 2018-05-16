<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        $increment_user_id = 1;
        foreach (range(0,10) as $i) {
            DB::table('profiles')->insert([
                'nama'          => $faker->name,
                'tempat_lahir'  => $faker->city,
                'tanggal_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),  
                'jenis_kelamin' => $faker->randomElement(['laki-laki' ,'perempuan']),
                'alamat'        => $faker->address,
                'user_id'       => $increment_user_id++,
            ]);
        }
    }
}
