<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        	'email' => 'admin@example.com',
        	'username' => 'admin',
        	'password' => Hash::make('admin123'),
        	'status' => true

        ]);
    }
}
