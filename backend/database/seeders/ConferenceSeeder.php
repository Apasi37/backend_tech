<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conferences')->insert(
            [
                [
                    'name' => 'Animal Science Days 2024',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Animal Science Days 2025',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
