<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CanchaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->sentence(),
            'precio' => $this->faker->numberBetween(2000, 20000),
            'medida_1' => $this->faker->numberBetween(15, 50),
            'medida_2' => $this->faker->numberBetween(15, 50),
        ];
    }
}
