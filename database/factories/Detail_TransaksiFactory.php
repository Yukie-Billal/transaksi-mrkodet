<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Detail_TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->unique()->name(),
            'jumlah' => mt_rand(1,2),
            'harga' => mt_rand(1000,2000),
            'transaksi_id' => 1
        ];
    }
}
