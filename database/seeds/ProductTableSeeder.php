<?php

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
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51stFu%2BS8aL._SX373_BO1,204,203,200_.jpg',
            'title' => 'Metro2033',
            'description' => 'the best metro saga',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51stFu%2BS8aL._SX373_BO1,204,203,200_.jpg',
            'title' => 'Metro2033',
            'description' => 'the best metro saga',
            'price' => 10
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51stFu%2BS8aL._SX373_BO1,204,203,200_.jpg',
            'title' => 'Metro2033',
            'description' => 'the best metro saga',
            'price' => 10
        ]);
        $product->save();
    }
}
