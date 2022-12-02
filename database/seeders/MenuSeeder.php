<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name' => 'Students',
            'link' => '/student',
        ]);
        Menu::create([
            'name' => 'Partner',
            'link' => '/partner',
        ]);
        Menu::create([
            'name' => 'Services',
            'link' => '',
        ]);

        foreach (service::all() as $se){
            Menu::create([
                'name' => $se['name'],
                'link' => $se['link_page'],
                'menu_id'=>4
            ]);
        }

        Menu::create([
            'name' => 'About Us',
            'link' => '/about',

        ]);
        Menu::create([
            'name' => 'Contact Us',
            'link' => '/contact',
        ]);


//        Student – Partners – Service (Admission – Visa Service – Accommodation – Insurance – Scholarship) – About Us – Log in – Contact
    }
}
