<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice'; 
    protected $fillable = [
        'id_kwitansi',
        'id_penyewa',
        'no_pol',
    ];

    public function kwitansi()
    {
        return $this->belongsTo(Kwitansi::class, 'id_kwitansi', 'id');
    }

    public function penyewa()
    {
        return $this->belongsTo(Penyewa::class, 'id_penyewa', 'id_penyewa');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'no_pol', 'no_pol');
    }
}