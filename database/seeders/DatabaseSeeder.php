<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
        User::create([
            'name' => 'Groupket',
            'email' => 'admin@groupket.com',
            'password' => Hash::make('biz2025!'),
            'mobile' => '010-4688-3824'
        ]);
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            InquiryTypeSeeder::class,
            PlanSeeder::class,
            PriceSeeder::class,
        ]);
    }
}
