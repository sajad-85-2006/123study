<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use App\Models\User;
use Grpc\Call;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'profile'=>fake()->imageUrl,

            'name'=>'sajad',
            'email'=>'prj.sajad85@gmail.com',
            'password'=>Hash::make('sajad4355'),
            'rule'=>'admin',
            'phoneNumber'=>fake()->phoneNumber,
            'countryInsert'=>fake()->country,
        ]);
        User::create([
            'profile'=>fake()->imageUrl,
            'name'=>'sajad',
            'email'=>'info@otters.ir',
            'password'=>Hash::make('otters'),
            'phoneNumber'=>fake()->phoneNumber,
            'countryInsert'=>fake()->country,
        ]);
        User::create([
            'profile'=>fake()->imageUrl,
            'name'=>'sajad',
            'email'=>'sss@sss.com',
            'password'=>Hash::make('1111'),
            'phoneNumber'=>fake()->phoneNumber,
            'countryInsert'=>fake()->country,
        ]);
        $this->call([ServiceSeeder::class,MenuSeeder::class,Country::class,StepSeeder::class]);

    }
}
