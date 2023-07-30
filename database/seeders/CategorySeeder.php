<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek = Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'name'=>'Erkek',
            'slug'=>'erkek',
            'content'=>'Erkek Giyim',
            'cat_ust'=>null,
            'status'=>'1',
        ]);

        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'name'=>'Pantolon',
            'slug'=>'erkek',
            'content'=>'Erkek Pantolonu',
            'cat_ust'=>$erkek->id,
            'status'=>'1',
        ]);

        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'name'=>'Kadın',
            'slug'=>'kadın',
            'content'=>'Kadın Giyim',
            'cat_ust'=>null,
            'status'=>'1',
        ]);

        Category::create([
            'image'=>null,
            'thumbnail'=>null,
            'name'=>'Cocuk',
            'slug'=>'cocuk',
            'content'=>'Cocuk Giyim',
            'cat_ust'=>null,
            'status'=>'1',
        ]);
    }
}
