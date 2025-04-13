<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggota_d0223310_a";
    protected $primaryKey = "nisn";
    protected $fillable = ['nisn', 'nama', 'alamat', 'no_telepon'];
}
