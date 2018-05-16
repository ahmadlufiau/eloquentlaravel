<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
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
        foreach (range(0,10) as $i) {
            DB::table('users')->insert([
                'username'  => $faker->userName,
                'email'     => 'nama' . $i . '@gmail.com',
                'password'  => bcrypt('password'),
            ]);
        }
    }
}
