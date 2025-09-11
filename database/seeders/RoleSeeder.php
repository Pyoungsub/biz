<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::insert([
            ['role' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'internal', 'created_at' => now(), 'updated_at' => now()],
            ['role' => 'external', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
