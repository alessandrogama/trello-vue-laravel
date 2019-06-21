<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Via Digita',
            'email' => 'via@digital.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
