<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    // Menentukan nama tabel (jika menggunakan nama selain 'users')
    protected $table = 'users';

    // Menentukan primary key yang digunakan
    protected $primaryKey = 'user_id';  // Menetapkan kolom user_id sebagai primary key

    // Menentukan kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'username', 'email', 'password', 'role'
    ];

    // Menentukan kolom yang harus disembunyikan saat dikonversi menjadi array atau JSON
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Menentukan kolom yang dikonversi menjadi tipe tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mutator untuk meng-hash password sebelum disimpan
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
