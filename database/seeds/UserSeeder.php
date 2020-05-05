<?php

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
            'name' => Str::random(3),
            'email' => Str::random(3).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
