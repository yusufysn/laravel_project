<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'image' => 'https://fakeimage.pl/250x100/',
            'name' => 'Slider1',
            'content' => 'Eticaret Sitemize Hoş Geldiniz',
            'link' => 'urunler',
            'status' => '1'
        ]);
    }
}
