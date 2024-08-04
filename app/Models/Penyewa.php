<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    use HasFactory;

    protected $table = 'penyewa';
    protected $primaryKey = 'id_penyewa'; // Atur primary key sesuai dengan nama yang digunakan di database

    protected $fillable = [
        'nama_penyewa',
        'alamat',
        'no_hp',
    ];
}
