<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // glovo
        Company::create([
            'name' => 'Glovo',
            'slug' => 'glovo',
        ]);

        // uber eats
        Company::create([
            'name' => 'Uber Eats',
            'slug' => 'uber-eats',
        ]);

        // deliveroo
        Company::create([
            'name' => 'Deliveroo',
            'slug' => 'deliveroo',
        ]);

        // just eat
        Company::create([
            'name' => 'Just Eat',
            'slug' => 'just-eat',
        ]);
    }
}
