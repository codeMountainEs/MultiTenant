<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Rider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rider = Rider::create([
            'name' => 'Rider 1',
            'email' => 'rider1@filament.test',
            'password' => bcrypt('password'),
        ]);

        $rider->companies()->attach(Company::where('slug', 'glovo')->first());

        $rider = Rider::create([
            'name' => 'Rider 2',
            'email' => 'rider2@filament.test',
            'password' => bcrypt('password'),
        ]);

        $rider->companies()->attach(Company::where('slug', 'glovo')->first());
        $rider->companies()->attach(Company::where('slug', 'uber-eats')->first());
    }
}
