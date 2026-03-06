<?php

namespace Database\Seeders;

use App\Models\Category;
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
    }
}