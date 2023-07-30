<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name'=>'adres',
            'data'=>'İstanbul Arnavutköy',
        ]);
        SiteSetting::create([
            'name'=>'phone',
            'data'=>'+90 505 472 43 72',
        ]);
        SiteSetting::create([
            'name'=>'email',
            'data'=>'yusufyesin02@gmail.com',
        ]);
        SiteSetting::create([
            'name'=>'harita',
            'data'=>null,
        ]);
    }
}
