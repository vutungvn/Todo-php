<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categories = [
            [
                'name' => 'Điện thoại',
                'description' => 'Các loại điện thoại di động, smartphone',
                'image' => null,
                'parent_id' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Laptop',
                'description' => 'Máy tính xách tay các hãng',
                'image' => null,
                'parent_id' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Máy tính bảng',
                'description' => 'Tablet, iPad các loại',
                'image' => null,
                'parent_id' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Phụ kiện',
                'description' => 'Ốp lưng, sạc, tai nghe, cáp kết nối',
                'image' => null,
                'parent_id' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'name' => 'Đồng hồ thông minh',
                'description' => 'Smartwatch, đồng hồ thể thao',
                'image' => null,
                'parent_id' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $products = [
            [
                'category_id' => 1, // Điện thoại
                'name' => 'iPhone 16 Pro Max',
                'price' => 34990000,
                'sale_price' => 32990000,
                'stock' => 50,
                'description' => 'iPhone 16 Pro Max 256GB chính hãng',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 1, // Điện thoại
                'name' => 'Samsung Galaxy S25 Ultra',
                'price' => 33990000,
                'sale_price' => null,
                'stock' => 30,
                'description' => 'Samsung Galaxy S25 Ultra 256GB',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 2, // Laptop
                'name' => 'MacBook Air M3',
                'price' => 27990000,
                'sale_price' => 25990000,
                'stock' => 20,
                'description' => 'MacBook Air M3 13 inch 8GB/256GB',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 4, // Phụ kiện
                'name' => 'AirPods Pro 2',
                'price' => 6790000,
                'sale_price' => 5990000,
                'stock' => 100,
                'description' => 'Tai nghe Apple AirPods Pro 2 USB-C',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 5, // Đồng hồ thông minh
                'name' => 'Apple Watch Series 10',
                'price' => 11990000,
                'sale_price' => null,
                'stock' => 15,
                'description' => 'Apple Watch Series 10 GPS 42mm',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 2, // Laptop
                'name' => 'Dell XPS 15',
                'price' => 42990000,
                'sale_price' => 39990000,
                'stock' => 10,
                'description' => 'Dell XPS 15 Core i7 Gen 13 16GB/512GB',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 1, // Điện thoại
                'name' => 'Xiaomi 14 Ultra',
                'price' => 22990000,
                'sale_price' => 20990000,
                'stock' => 25,
                'description' => 'Xiaomi 14 Ultra 512GB Leica Camera',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 3, // Máy tính bảng
                'name' => 'iPad Pro M4 13 inch',
                'price' => 32990000,
                'sale_price' => null,
                'stock' => 18,
                'description' => 'iPad Pro M4 13 inch 256GB Wi-Fi',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 4, // Phụ kiện
                'name' => 'Samsung Galaxy Buds3 Pro',
                'price' => 4990000,
                'sale_price' => 3990000,
                'stock' => 60,
                'description' => 'Tai nghe Samsung Galaxy Buds3 Pro chống ồn ANC',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
            [
                'category_id' => 5, // Đồng hồ thông minh
                'name' => 'Garmin Fenix 8',
                'price' => 19990000,
                'sale_price' => 17990000,
                'stock' => 12,
                'description' => 'Đồng hồ thể thao Garmin Fenix 8 Solar GPS',
                'image' => null,
                'is_active' => 1,
                'is_delete' => 0,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}