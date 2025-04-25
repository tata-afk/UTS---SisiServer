<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Book',
            'description' => 'Book Category.',
            'created_by' => 1,
        ]);

        Category::create([
            'name' => 'Pen',
            'description' => 'Ballpoint Category.',
            'created_by' => 1,
        ]);

        Category::create([
            'name' => 'Pencil',
            'description' => 'Pencil Category.',
            'created_by' => 1,
        ]);
    }
}
