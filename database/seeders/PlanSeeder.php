<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Plan::insert([
            ['name' => 'basic', 'duration_months' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'startup', 'duration_months' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'business', 'duration_months' => 12, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
