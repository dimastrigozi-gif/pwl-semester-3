<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// model turnamen, masih sederhana
class Tournament extends Model
{
    // field yang boleh diisi dari form
    protected $fillable = ['title', 'game', 'quota', 'price', 'start_date', 'status'];

    // biar angka quota dan price jadi integer
    protected $casts = [
        'quota' => 'integer',
        'price' => 'integer',
        'start_date' => 'date',
    ];
}
