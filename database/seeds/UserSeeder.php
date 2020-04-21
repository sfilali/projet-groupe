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
            "name" => "Ayhan",
            "email" => "Ayhan@exemple.com",
            "password" => "hello",
            "created_at" => now()
        ]);
        
        DB::table('users')->insert([
            "name" => "Soumaya",
            "email" => "Soumaya@exemple.com",
            "password" => "hello",
            "created_at" => now()
        ]);
    }
}
