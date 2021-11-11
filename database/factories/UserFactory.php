<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => "$2y$10\$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha", // password
            'remember_token' => Str::random(10),
            'ip_address' => $this->faker->ipv4(),
        ];
    }
    public function customUser() {

        return $this->state(function(){
            return [
                
            ];
        });
    }
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
