<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggotas';
    protected $fillable = [
        'nama',
        'no_telp',
        'email',
        'kota',
        'alamat',
        'tgl_lahir'
    ];
}
