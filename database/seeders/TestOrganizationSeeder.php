<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Organization;

class TestOrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organization::create([
            'name' => 'Test Association',
            'slug' => 'test-association',
            'type' => 'association',
            'email' => 'test@test.com',
            'phone_number' => '+351912345678',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // or bcrypt('password')
            'vat_number' => 'PT123456789',
            'description' => 'This is a test organization.',
            'logo' => null,
        ]);
    }
}
