<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class hotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->title(),
            'descripcion' => $this->faker->paragraph(),
            'ubicacion' => $this->faker->bothify('??????????-###'),
            'telefono'=> $this->faker->randomNumber(8, true),
            'poster' => $this->faker->imageUrl(),
        ];
    }
}
