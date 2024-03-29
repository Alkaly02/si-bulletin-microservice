<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DomaineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->domainWord(),
            'description' => $this->faker->sentence('4', true)
        ];
    }
}