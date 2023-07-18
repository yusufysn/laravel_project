<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('categories')->insert([
            ['name' => 'Giyim'],
            ['name' => 'Elektronik'],
            ['name' => 'Ev Dekorasyon'],
       ]);
       DB::table('categories')->insert([
           ['name' => 'Erkek Giyim', 'category_id' => 1],
            ['name' => 'Kadın Giyim', 'category_id' => 1],
           ['name' => 'Çocuk Giyim', 'category_id' => 1],
           ['name' => 'Bilgisayar', 'category_id' => 2],
            ['name' => 'Cep Telefonu', 'category_id' => 2],
            ['name' => 'Saat', 'category_id' => 2],
            ['name' => 'Vazolar', 'category_id' => 3],
            ['name' => 'Tablolar', 'category_id' => 3],
            ['name' => 'Koltuk', 'category_id' => 3],
        ]);
                DB::table('categories')->insert([
            ['name' => 'Pantolon', 'category_id' => 4],
            ['name' => 'Gömlek', 'category_id' => 4],

        ]);

    }
}
