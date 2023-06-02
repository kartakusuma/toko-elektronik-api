<?php

namespace Database\Factories;

use App\Models\Produsen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->word(),
            'jumlah' => fake()->randomNumber(),
            'harga' => fake()->numberBetween(100000, 10000000),
            'produsen_id' => function () {
                return Produsen::inRandomOrder()->first()->id;
            }
        ];
    }
}
