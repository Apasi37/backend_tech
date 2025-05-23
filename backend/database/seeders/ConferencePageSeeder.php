<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ConferencePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conference_page')->insert(
            [
                ["conference_id" => 1, "page_id" => 1],
                ["conference_id" => 1, "page_id" => 2],
                ["conference_id" => 2, "page_id" => 3],
                ["conference_id" => 2, "page_id" => 4],
            ]
        );
    }
}
