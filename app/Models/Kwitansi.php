<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kwitansi extends Model
{
    use HasFactory;
    protected $table = 'kwitansi';

    protected $fillable = [
        'id_kwitansi',
        'tgl_kwitansi',
    ];
}
