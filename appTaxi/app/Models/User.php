<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, mixed>
     */
    protected $fillable = [
        'Nombre', // Cambiado desde 'name'
        'CorreoElectronico', // Cambiado desde 'email'
        'Contrasena', // Cambiado desde 'password'
        'NumeroTelefono',
        'RolID',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Contrasena', // Cambiado desde 'password'
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'Contrasena' => 'hashed', // Cambiado desde 'password'
    ];

    protected $primaryKey = 'ID';

    public function role()
    {
        return $this->belongsTo(Role::class, 'RolID');
    }

    public function trips()
    {
        return $this->hasMany(Trip::class, 'UsuarioID');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'UsuarioID');
    }
}
