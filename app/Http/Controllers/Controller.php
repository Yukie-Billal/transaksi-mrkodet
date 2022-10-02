<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('welcome', [
            'name' => 'Yukie',
            'app' => 'transaksi'
        ]);
    }
    public function Home()
    {
        return view('Home', [
            'title' => 'Beranda',
            'name' => 'Aplikasi Transaksi Mister Kodet',
            'img' => 'dolar.jpg'
        ]);
    }
    public function about()
    {
        return view('about', [
            'name' => 'Yukie M Billal',
            'kelas' => '12 Rpl B',
            'sekolah' => 'SMK TI Pembangunan' 
        ]);
    }
}
