<?php

namespace Database\Seeders;

use App\Models\service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        service::create([
            'name' => 'Admission',
            'link_page' => '/service/admission',
        ]);
        service::create([
            'name' => 'Visa Service',
            'link_page' => '/service/visa-service',

        ]);
        service::create([
            'name' => 'Insurance',
            'link_page' => '/service/insurance',
        ]);

        service::create([
            'name' => 'Scholarship',
            'link_page' => '/service/scholarship',
        ]);
    }
}
