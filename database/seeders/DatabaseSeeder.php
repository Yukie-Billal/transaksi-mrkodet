<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\detail_transaksi;
use App\Models\karyawan;
use App\Models\laporanKaryawan;
use App\Models\laporanPengguna;
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
        admin::factory(3)->create();
        karyawan::factory(3)->create();
        pengguna::factory(5)->create();
        transaksi::factory(5)->create();
        detail_transaksi::factory(5)->create();
        laporanPengguna::factory(3)->create();
        laporanKaryawan::factory(2)->create();
    }
}
