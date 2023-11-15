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
        // forma 1
        $category = new Category;
        $category->category_name = "";
        $category->description = "";
        $category->save();

        // forma 2
        Category::create([
            "category_name" => "Category 2",
            "description" => "desc 2",
        ]);
        //forma 3
        Category::insert([
            "category_name" => "Category 2",
            "description" => "desc 2",
        ]);

        Category::insert([
            [
                "category_name" => "Category 2",
                "description" => "desc 2",
            ],
            [
                "category_name" => "Category 2",
                "description" => "desc 2",
            ], [
                "category_name" => "Category 2",
                "description" => "desc 2",
            ]
        ]);
    }
}
