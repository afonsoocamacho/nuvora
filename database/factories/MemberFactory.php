<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\MemberType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
{

    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'organization_id' => 1,
            'member_type_id' => MemberType::factory(), // or null if you want
            'country_id' => null,
            'card_number' => $this->faker->unique()->numerify('CARD###'),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'birthdate' => $this->faker->date(),
            'status' => $this->faker->randomElement(['active', 'inactive', 'banned']),
            'joined_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
