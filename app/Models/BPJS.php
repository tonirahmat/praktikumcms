<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    use HasFactory;

    protected $table = 'bpjs'; // nama tabel
    public $incrementing = false; // karena kolom 'id' bukan auto increment
    protected $keyType = 'string'; // tipe data 'id' adalah string

    protected $fillable = [
        'id',
        // Tambahkan kolom lain di sini jika ada
    ];
}
