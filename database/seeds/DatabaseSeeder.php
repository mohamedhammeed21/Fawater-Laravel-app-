<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'حماده',
            'email' => 'mh3yad@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('asd@123AA'),
        ]);
    }
}
