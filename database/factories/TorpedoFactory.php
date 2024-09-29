<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TorpedoFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $randomViewed = fake()->boolean(50) ? NULL : fake()->dateTimeBetween('-1 year', 'now');
        return [
            'user_id' => User::factory(),
            'title' => fake()->sentence(),
            'text' => fake()->sentence(),
            'targetEmail' => fake()->safeEmail(),
            'viewedAt' => $randomViewed,
        ];
    }

    
}
