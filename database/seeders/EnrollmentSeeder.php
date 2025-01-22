<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Enrollment::factory(10)->create();
    }
}
