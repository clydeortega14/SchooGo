<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [

        	[
        		'name' => 'Books',
        		'description' => 'This consist of novels, mythology, horror, and etc ...'
        	],

        	[
        		'name' => 'School Supplies',
        		'description' => 'you can purchase some school requirements your children needed.'
        	],

        ];


        foreach($categories as $category){

        	Category::create([

        		'name' => $category['name'],
        		'description' => $category['description']
        	]);
        }
    }
}
