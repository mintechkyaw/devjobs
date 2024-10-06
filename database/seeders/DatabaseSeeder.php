<?php

namespace Database\Seeders;

use App\Models\Company;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Job;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Skill::factory(15)->create();
        Job::factory(40)->create();
        // Company::factory(10)->create();

    }
}
