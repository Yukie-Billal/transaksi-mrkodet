<?php

namespace Database\Seeders;

use App\Models\pengguna;
use App\Models\transaksi;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        transaksi::factory(5)->create();
        pengguna::factory(5)->create();
    }
}
