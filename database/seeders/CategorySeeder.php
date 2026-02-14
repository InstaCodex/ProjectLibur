<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain',
            'warna' => 'primary',
        ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'warna' => 'warning',
        ]);
        Category::create([
            'name' => 'Web Three',
            'slug' => 'web-three',
            'warna' => 'success',
        ]);
    }
}
