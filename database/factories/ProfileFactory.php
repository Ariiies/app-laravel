<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job' => $this->faker->jobTitle(),
            'phone' => $this->faker->phoneNumber(),
            'website' => $this->faker->domainName(),
            //'user_id' => \App\Models\User::factory()->create()->id,
        ];
    }
}
