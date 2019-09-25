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
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet esse, corrupti incidunt? Magni maxime expedita ducimus nobis, veritatis, alias repudiandae. Et voluptatum nostrum fugiat, sapiente autem porro numquam. Consequuntur, cum.'
        	],

        	[
        		'name' => 'School Supplies',
        		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet esse, corrupti incidunt? Magni maxime expedita ducimus nobis, veritatis, alias repudiandae. Et voluptatum nostrum fugiat, sapiente autem porro numquam. Consequuntur, cum.'
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
