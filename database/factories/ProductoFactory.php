<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'precio' => fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'descripcion' => fake()->text($maxNbChars = 50),
        ];
    }
}
