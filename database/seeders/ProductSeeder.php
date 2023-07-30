<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Urun1',
            'slug'=>'urun1',
            'image'=>'assets/img/product/fashion-colorful/1.jpg',
            'content'=>'ürün çok güzel',
            'short_text'=>'kisabilgi',
            'price'=>334,
            'size'=>'Small',
            'color'=>'Beyaz',
            'amount'=>10,
            'status'=>'1',
            'category_id'=>1,
        ]);

        Product::create([
            'name'=>'Urun2',
            'slug'=>'urun2',
            'image'=>'assets/img/product/fashion-colorful/2.jpg',
            'content'=>'ürün açıklama',
            'short_text'=>'kisabilgi',
            'price'=>100,
            'size'=>'Large',
            'color'=>'Siyah',
            'amount'=>5,
            'status'=>'1',
            'category_id'=>2,
        ]);

        Product::create([
            'name'=>'Urun3',
            'slug'=>'urun3',
            'image'=>'assets/img/product/fashion-colorful/3.jpg',
            'content'=>'ürün açıklama',
            'short_text'=>'kisabilgi',
            'price'=>200,
            'size'=>'Medium',
            'color'=>'Sarı',
            'amount'=>4,
            'status'=>'1',
            'category_id'=>3,
        ]);

        Product::create([
            'name'=>'Urun4',
            'slug'=>'urun4',
            'image'=>'assets/img/product/fashion-colorful/4.jpg',
            'content'=>'ürün açıklama',
            'short_text'=>'kisabilgi',
            'price'=>200,
            'size'=>'Large',
            'color'=>'Siyah',
            'amount'=>4,
            'status'=>'1',
            'category_id'=>4,
        ]);
    }
}
