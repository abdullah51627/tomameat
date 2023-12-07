<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'name' => 'Chicken Breast',
            'description' => "Chicken breast is a must have item in every freezer. It's a rich source of protein which is vital for muscle building. Chicken breast is highly versatile and a great addition to everyday meals.",
            'priority' => 1,
            'categories' => Category::first()->id,
            'rating' => 0,
            'price' => 100,
            'discount' => 20,
            'title' => 'Chicken Breast',
            'keywords' => serialize(["chicken"]),
            'meta_description' => "Chicken breast is a must have item in every freezer. It's a rich source of protein which is vital for muscle building. Chicken breast is highly versatile and a great addition to everyday meals.",
            'status' => 1,
            'delivery_charges' => 10,
            'additional_info' => "n/a",
            'qty' => 12,
            'url' => '/'
        ]);
    }
}
