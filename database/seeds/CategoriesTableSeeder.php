<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = ['A fazer', 'Em Andamento', 'Finalizadas'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
