<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert(
            [
                [
                    'conference_id' => 1,
                    'name' => 'conf1 page1',
                    'html' => '<p>paragraph1</p><p>paragraph</p><p>paragraph3</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'conf1 page2',
                    'html' => '<p>secondpage</p><p>paragraph</p><p>paragraph3</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 2,
                    'name' => 'conf2 page1',
                    'html' => '<p>paragraph1</p><p>paragraph</p><p>paragraph3</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 2,
                    'name' => 'conf2 page2',
                    'html' => '<p>secondpage</p><p>paragraph</p><p>paragraph3</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
