<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect(['Sayur', 'Buah', 'Bukan buah'])
            ->each(function ($category) {
                return Category::create([
                    'name' => $category,
                    'description' => 'desc '.$category,
                ]);
            });
    }
}
