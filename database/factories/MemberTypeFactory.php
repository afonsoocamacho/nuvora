<?php

namespace Database\Factories;

use App\Models\MemberType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemberType>
 */
class MemberTypeFactory extends Factory
{
    protected $model = MemberType::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'organization_id' => 1, // or use a factory if you have an Organization model
            'name' => $this->faker->unique()->randomElement([
                'Standard',
                'Premium',
                'Student',
                'Alumni',
                'VIP'
            ]),
            'description' => $this->faker->optional()->sentence(),
        ];
    }
}
