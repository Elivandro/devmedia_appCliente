<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{

    public function definition()
    {
        return [
            'nome' => fake()->name(),
            'email' => fake()->safeEmail(),
            'endereco' => fake()->streetAddress(),
        ];
    }
}
