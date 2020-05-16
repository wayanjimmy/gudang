<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Baju']);
        Category::create(['name' => 'Celana']);
        Category::create(['name' => 'Elektronik']);

        for ($i=0; $i < 100; $i++) {
            Category::create(['name' => 'Category' . $i]);
        }
    }
}
