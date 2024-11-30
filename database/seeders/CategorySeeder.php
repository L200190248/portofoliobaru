<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;  // Import Str class

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Teknologi',
            'Kesehatan',
            'Pendidikan',
            'Bisnis',
            'Pariwisata',
            'Kehidupan',
            'Lingkungan',
            'Sejarah',
            'Olahraga',
            'Sosial dan Budaya',
            'Politik',
            'Ekonomi',
            'Lifestyle',
            'Seni dan Hiburan',
            'Parenting'
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category, 'slug' => Str::slug($category)]);  // Menggunakan Str::slug
        }
    }
}
