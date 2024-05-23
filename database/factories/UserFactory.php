<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    protected static ? string $password;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'profile_img' => $this->faker->imageUrl(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => $this->faker->uuid(),
            'email_verified_at' => $this->faker->dateTime(),
        ];
    }
}
