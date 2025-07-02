<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\MemberType;
use App\Models\Organization;
use Illuminate\Support\Facades\Hash;

class TestMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $memberType = MemberType::factory()->create([
            'organization_id' => 1,
        ]);

        Member::factory()->count(10)->create([
            'organization_id' => 1,
            'member_type_id' => $memberType->id,
        ]);
    }
}
