<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 40) as $product) {
            Product::create([
                'name' => 'Product '.$product,
                'description' => 'product description '.$product,
                'price_per_unit' => mt_rand(100, 10000),
            ]);
        }
    }
}
