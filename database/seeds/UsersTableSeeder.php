<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EditorialWeb\User::create([
            'name' => 'alberto13711',
            'email' => 'alberto13711@gmail.com',
            'password' => bcrypt('luiscorrea13711'),
            'estado' => 1
        ]);
    }
}
