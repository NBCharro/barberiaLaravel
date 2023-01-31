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
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'fabricante' => $this->faker->company(),
            'categoria' => $this->faker->randomElement(["Barba", "Cabello", "Complementos", "Fijacion", "Afeitado"]),
            'precio' => $this->faker->randomFloat(2, 0.01, 100),
            'stock' => $this->faker->numberBetween(0, 100),
            'descripcion' => $this->faker->paragraph(1),
            'imagen' => $this->faker->imageUrl(100, 100),
        ];
    }
}
