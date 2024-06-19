<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

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
        // ]);

        $this->call([
            CompanySeeder::class,
        ]);

        User::factory()->create([
            'name' => 'No Company',
            'email' => 'nocompany@filament.test',
        ]);

        $globo = User::factory()->create([
            'name' => 'Glovo',
            'email' => 'glovo@filament.test',
        ]);

        $globo->companies()->attach(Company::where('slug', 'glovo')->first());

        $uberEats = User::factory()->create([
            'name' => 'Uber Eats',
            'email' => 'ubereats@filament.test',
        ]);

        $uberEats->companies()->attach(Company::where('slug', 'uber-eats')->first());
        $multiCompany = User::factory()->create([
            'name' => 'Multi Company',
            'email' => 'multicompany@filament.test',
        ]);

        $multiCompany->companies()->attach(Company::where('slug', 'uber-eats')->first());
        $multiCompany->companies()->attach(Company::where('slug', 'glovo')->first());
        $multiCompany->companies()->attach(Company::where('slug', 'deliveroo')->first());
        $multiCompany->companies()->attach(Company::where('slug', 'just-eat')->first());

    }
}
