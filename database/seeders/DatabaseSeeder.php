<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
//        // ]);
//        $this->call(CategorySeeder::class);
//        $this->call(PropertySeeder::class);
//        $this->call(ProductSeeder::class);
//        $this->call(ProductPropertiesSeeder::class);

        Role::create(['name'=>'admin']); //yeni rol tanımlaması
        $user=User::find(1);
        $user->assignRole('admin');  //tanımlanam rol kullanıcıya atanır.


        //$this->call([
        //    SliderSeeder::class,
        //    CategorySeeder::class,
        //    SiteSettingSeeder::class,
        //    ProductSeeder::class,
        //]);
        //User::factory(100)->create();

    }
}
