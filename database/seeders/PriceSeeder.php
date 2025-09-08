<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Price;
class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Price::insert([
            ['plan_id' => 1, 'price' => 220000, 'created_at' => now(), 'updated_at' => now()],
            ['plan_id' => 2, 'price' => 165000, 'created_at' => now(), 'updated_at' => now()],
            ['plan_id' => 3, 'price' => 110000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
