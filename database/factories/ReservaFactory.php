<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
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
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'fecha' => $this->faker->date($format = 'Y-m-d', $max = '2023-02-15'),
            'hora' => $this->faker->randomElement(["10:00 - 11:00", "11:00 - 12:00", "12:00 - 13:00", "13:00 - 14:00", "14:00 - 15:00", "17:00 - 18:00", "18:00 - 19:00", "19:00 - 20:00", "20:00 - 21:00"]),
            'servicio' => $this->faker->randomElement([
                "Corte de pelo - 14€",
                "Corte y afeitado - 24€",
                "Corte al cero - 9€",
                "Corte con lavado y peinado - 17€",
                "Afeitado - 11€",
                "Arreglo de barba - 8€",
                "Arreglo y perfilado de barba - 12€",
                "Corte y arreglo de barba - 21€",
                "Corte, arreglo y perfilado de barba - 25€"
            ]),
            'trabajadora' => $this->faker->randomElement(["Cualquiera", "Xhemi", "Guilherme", "Andrea", "Anna"]),
        ];
    }
}
