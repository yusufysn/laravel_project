<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('product_properties')->insert([
           ['property_id'=>1,'product_id'=>1,'property_value'=>'42'],
           ['property_id'=>2,'product_id'=>1,'property_value'=>'30'],
           ['property_id'=>3,'product_id'=>1,'property_value'=>'Mavi'],
           ['property_id'=>3,'product_id'=>1,'property_value'=>'Kırmızı'],
           ['property_id'=>4,'product_id'=>1,'property_value'=>'var'],
       ]);
    }
}
