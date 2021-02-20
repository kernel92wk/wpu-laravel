<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10) . 'admin',
            'email' => Str::random(10) . 'admin@gmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
