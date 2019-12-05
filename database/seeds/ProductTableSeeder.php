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
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10

        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 13

        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super harry potter easy.',
            'price' => 11

        ]);
        $product->save();
        
        $product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 12

        ]);
        $product->save();
    }
}
