<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            ['name' => 'English', 'iso_code' => 'en', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'French', 'iso_code' => 'fr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'German', 'iso_code' => 'de', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spanish', 'iso_code' => 'es', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Italian', 'iso_code' => 'it', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dutch', 'iso_code' => 'nl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Portuguese', 'iso_code' => 'pt', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Swedish', 'iso_code' => 'sv', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Danish', 'iso_code' => 'da', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finnish', 'iso_code' => 'fi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Greek', 'iso_code' => 'el', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hungarian', 'iso_code' => 'hu', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Polish', 'iso_code' => 'pl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Czech', 'iso_code' => 'cs', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Slovak', 'iso_code' => 'sk', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Slovenian', 'iso_code' => 'sl', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Romanian', 'iso_code' => 'ro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bulgarian', 'iso_code' => 'bg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Croatian', 'iso_code' => 'hr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Latvian', 'iso_code' => 'lv', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lithuanian', 'iso_code' => 'lt', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Estonian', 'iso_code' => 'et', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Irish', 'iso_code' => 'ga', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Maltese', 'iso_code' => 'mt', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
