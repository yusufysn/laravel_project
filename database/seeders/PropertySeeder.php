<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('properties')->insert([
           ['category_id'=>4,'name'=>'en','type'=>'text'],
           ['category_id'=>4,'name'=>'boy','type'=>'text'],
           ['category_id'=>4,'name'=>'renk','type'=>'text'],
           ['category_id'=>4,'name'=>'yırtık','type'=>'check'],

           ['category_id'=>11,'name'=>'genişlik','type'=>'text'],
           ['category_id'=>11,'name'=>'yükseklik','type'=>'text'],
           ['category_id'=>11,'name'=>'yağlı boya','type'=>'check'],
           ['category_id'=>11,'name'=>'kara kalem','type'=>'check'],
       ]);
    }
}
