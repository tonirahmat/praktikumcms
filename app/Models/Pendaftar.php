<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'PENDAFTAR'; // nama tabel di Oracle (UPPERCASE jika case-sensitive)

    protected $fillable = [
        'nama', 'tanggal_lahir', 'jenis_kelamin',
        'telepon', 'bb', 'tb', 'bpjs_id'
    ];

    public $timestamps = false; // Jika tabel Oracle Anda tidak punya created_at/updated_at
}