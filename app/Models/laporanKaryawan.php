<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporanKaryawan extends Model
{
    use HasFactory;

    public function karyawan()
    {
        return $this->belongsTo(karyawan::class);
    }
}
