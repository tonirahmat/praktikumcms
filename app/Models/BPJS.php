<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BPJS extends Model
{
    protected $table = 'pendaftars';

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'telepon',
        'bb',
        'tb',
        'bpjs_id',
    ];
}
