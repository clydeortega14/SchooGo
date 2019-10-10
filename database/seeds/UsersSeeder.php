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
        	'password' => Hash::make('password'),
        	'status' => true

        ]);

        User::create([

            'email' => 'guest@example.com',
            'username' => 'guest',
            'password' => Hash::make('password'),
            'status' => true

        ]);

        User::create([

            'email' => 'shipper@example.com',
            'username' => 'shipper',
            'password' => Hash::make('password'),
            'status' => true
        ]);
    }
}
