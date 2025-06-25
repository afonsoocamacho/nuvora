<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'Austria', 'iso2' => 'AT', 'iso3' => 'AUT', 'phone_code' => '+43', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Belgium', 'iso2' => 'BE', 'iso3' => 'BEL', 'phone_code' => '+32', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bulgaria', 'iso2' => 'BG', 'iso3' => 'BGR', 'phone_code' => '+359', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Croatia', 'iso2' => 'HR', 'iso3' => 'HRV', 'phone_code' => '+385', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cyprus', 'iso2' => 'CY', 'iso3' => 'CYP', 'phone_code' => '+357', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Czech Republic', 'iso2' => 'CZ', 'iso3' => 'CZE', 'phone_code' => '+420', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Denmark', 'iso2' => 'DK', 'iso3' => 'DNK', 'phone_code' => '+45', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Estonia', 'iso2' => 'EE', 'iso3' => 'EST', 'phone_code' => '+372', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finland', 'iso2' => 'FI', 'iso3' => 'FIN', 'phone_code' => '+358', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'France', 'iso2' => 'FR', 'iso3' => 'FRA', 'phone_code' => '+33', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Germany', 'iso2' => 'DE', 'iso3' => 'DEU', 'phone_code' => '+49', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Greece', 'iso2' => 'GR', 'iso3' => 'GRC', 'phone_code' => '+30', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hungary', 'iso2' => 'HU', 'iso3' => 'HUN', 'phone_code' => '+36', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ireland', 'iso2' => 'IE', 'iso3' => 'IRL', 'phone_code' => '+353', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Italy', 'iso2' => 'IT', 'iso3' => 'ITA', 'phone_code' => '+39', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Latvia', 'iso2' => 'LV', 'iso3' => 'LVA', 'phone_code' => '+371', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lithuania', 'iso2' => 'LT', 'iso3' => 'LTU', 'phone_code' => '+370', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Luxembourg', 'iso2' => 'LU', 'iso3' => 'LUX', 'phone_code' => '+352', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Malta', 'iso2' => 'MT', 'iso3' => 'MLT', 'phone_code' => '+356', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Netherlands', 'iso2' => 'NL', 'iso3' => 'NLD', 'phone_code' => '+31', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Poland', 'iso2' => 'PL', 'iso3' => 'POL', 'phone_code' => '+48', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Portugal', 'iso2' => 'PT', 'iso3' => 'PRT', 'phone_code' => '+351', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Romania', 'iso2' => 'RO', 'iso3' => 'ROU', 'phone_code' => '+40', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Slovakia', 'iso2' => 'SK', 'iso3' => 'SVK', 'phone_code' => '+421', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Slovenia', 'iso2' => 'SI', 'iso3' => 'SVN', 'phone_code' => '+386', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Spain', 'iso2' => 'ES', 'iso3' => 'ESP', 'phone_code' => '+34', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sweden', 'iso2' => 'SE', 'iso3' => 'SWE', 'phone_code' => '+46', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
