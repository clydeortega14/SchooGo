<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin', 'display_name' => null, 'description' => null]);
        Role::create(['name' => 'guest', 'display_name' => null, 'description' => null]);
        Role::create(['name' => 'shipper', 'display_name' => null, 'description' => null]);
    }
}
