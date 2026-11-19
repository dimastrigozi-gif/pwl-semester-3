<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    // field yang boleh diisi waktu register
    protected $fillable = ['name', 'username', 'email', 'password', 'role'];

    // password jangan ditampilkan
    protected $hidden = ['password'];

    // password otomatis di-hash
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
