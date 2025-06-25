<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currencies')->insert([
            ['name' => 'Euro', 'code' => 'EUR', 'symbol' => '€', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bulgarian Lev', 'code' => 'BGN', 'symbol' => 'лв', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Czech Koruna', 'code' => 'CZK', 'symbol' => 'Kč', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Danish Krone', 'code' => 'DKK', 'symbol' => 'kr', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hungarian Forint', 'code' => 'HUF', 'symbol' => 'Ft', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Polish Zloty', 'code' => 'PLN', 'symbol' => 'zł', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Romanian Leu', 'code' => 'RON', 'symbol' => 'lei', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Swedish Krona', 'code' => 'SEK', 'symbol' => 'kr', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
