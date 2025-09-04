<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InquiryType;

class InquiryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        InquiryType::insert([
            ['inquiry_type' => '서비스 관련', 'slug' => 'service', 'created_at' => now(), 'updated_at' => now()],
            ['inquiry_type' => '결제 문의', 'slug' => 'payment', 'created_at' => now(), 'updated_at' => now()],
            ['inquiry_type' => '기술 지원', 'slug' => 'technical', 'created_at' => now(), 'updated_at' => now()],
            ['inquiry_type' => '기타', 'slug' => 'other', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
