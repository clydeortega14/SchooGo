<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$departments = [

       		[
       			'name' => 'Novels',
       			'description' => 'for love story and etc...'
       		],

       		[
       			'name' => 'Myths',
       			'description' => 'Mythology stories'
       		],

       		[
       			'name' => 'for kids',
       			'description' => 'For kids books and school supplies'
       		],
       	];

       	foreach($departments as $department){

       		Department::create([

       			'name' => $department['name'],
       			'description' => $department['description'],

       		]);
       	}
    }
}
