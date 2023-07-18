<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name'=>'slim pantolon','detail'=>'asmfnsadkfnsa','price'=>250,'amount'=>200,'category_id'=>4],
            ['name'=>'rahat pantolon','detail'=>'ssdffg','price'=>300,'amount'=>300,'category_id'=>4],

            ['name'=>'slim pantolon','detail'=>'asmfnsadkfnsa','price'=>123,'amount'=>232,'category_id'=>5],
            ['name'=>'rahat pantolon','detail'=>'ssdffg','price'=>500,'amount'=>76,'category_id'=>5],

            ['name'=>'kısa pantolon','detail'=>'cdfsdfg','price'=>345,'amount'=>234,'category_id'=>6],
            ['name'=>'uzun pantolon','detail'=>'zxrtjfgh','price'=>123,'amount'=>778,'category_id'=>6],


            ['name'=>'Lenova mas ustu pc','detail'=>'dfsdfg','price'=>10000,'amount'=>33,'category_id'=>7],
            ['name'=>'Samsung telefon','detail'=>'sdasdf','price'=>40000,'amount'=>778,'category_id'=>8],

            ['name'=>'100*200 cm tablo','detail'=>'sdfsasdf','price'=>2222,'amount'=>66,'category_id'=>11],

        ]);
    }
}
