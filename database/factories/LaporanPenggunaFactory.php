<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanPenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->paragraph(),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(),
            'send_at' => $this->faker->dateTime(),
            'pengguna_id' => mt_rand(1, 2)
        ];
    }
}
