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

          /* BOOKS DEPARTMENT */
       		[
            'category_id' => 1,
       			'name' => 'Novels',
       			'description' => 'for love story and etc...'
       		],

       		[
            'category_id' => 1,
       			'name' => 'Myths',
       			'description' => 'Mythology stories'
       		],

       		[
            'category_id' => 1,
       			'name' => 'for kids',
       			'description' => 'For kids books and school supplies'
       		],


          /* SCHOOL SUPPLIES DEPARTMENT */
          [
             'category_id' => 2,
             'name' => 'Intermediate Pads',
             'description' => 'This is an intermediate pad'
          ],

          [
             'category_id' => 2,
             'name' => 'Notebooks',
             'description' => 'this is a notebook'
          ],
          [
             'category_id' => 2,
             'name' => 'Pencils and ballpens',
             'description' => 'this is pencil and ballpens'
          ],

       	];

       	foreach($departments as $department){

       		Department::create([

            'category_id' => $department['category_id'],
       			'name'        => $department['name'],
       			'description' => $department['description'],

       		]);
       	}
    }
}
