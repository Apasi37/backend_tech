<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ConferenceUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conference_user')->insert(
            [
                ["conference_id" => 1, "user_id" => 1],
                ["conference_id" => 2, "user_id" => 2],
            ]
        );
    }
}
