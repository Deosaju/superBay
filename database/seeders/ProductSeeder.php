<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Products::create([
            'name' => 'Laptop',
            'description' => 'Laptop description',
            'url' => 'https://example.com/laptop',
            'price' => 999.99,
            'stock' => 10,
            'in_stock' => true,
            'category_id' => 1, // Assuming category ID 1 is 'Electronics'
        ]);

        Products::create([
            'name' => 'T-Shirt',
            'description' => 'T-Shirt description',
            'url' => 'https://example.com/t-shirt',
            'price' => 19.99,
            'stock' => 50,
            'in_stock' => true,
            'category_id' => 2, // Assuming category ID 2 is 'Clothing'
        ]);

        // Add more products as needed
    }
}