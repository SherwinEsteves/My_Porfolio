<?php // <<<<< USER FACTORY >>>>> purpose: generates fake user records for tests and seeding

namespace Database\Factories; // <<<<< NAMESPACE >>>>> purpose: places the factory under Database\Factories

use App\Models\User; // <<<<< IMPORT >>>>> purpose: the model this factory creates
use Illuminate\Database\Eloquent\Factories\Factory; // <<<<< IMPORT >>>>> purpose: base factory class
use Illuminate\Support\Facades\Hash; // <<<<< IMPORT >>>>> purpose: hashes the fake password
use Illuminate\Support\Str; // <<<<< IMPORT >>>>> purpose: generates the random remember token

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory // <<<<< USER FACTORY >>>>> purpose: defines the default fake user data
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password; // <<<<< PASSWORD CACHE >>>>> purpose: reuse one hashed password across factories

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array // <<<<< DEFINITION >>>>> purpose: default column values for each fake user
    {
        return [
            'name' => fake()->name(), // <<<<< NAME >>>>> purpose: random fake name
            'email' => fake()->unique()->safeEmail(), // <<<<< EMAIL >>>>> purpose: unique random email
            'email_verified_at' => now(), // <<<<< VERIFIED AT >>>>> purpose: mark email as verified
            'password' => static::$password ??= Hash::make('password'), // <<<<< PASSWORD >>>>> purpose: hashed "password" (computed once)
            'remember_token' => Str::random(10), // <<<<< REMEMBER TOKEN >>>>> purpose: random token for "remember me"
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static // <<<<< UNVERIFIED STATE >>>>> purpose: override to create an unverified user
    {
        return $this->state(fn (array $attributes) => [ // <<<<< STATE >>>>> purpose: override default attributes
            'email_verified_at' => null, // <<<<< NULL DATE >>>>> purpose: treat the email as unverified
        ]);
    }
}
