<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $primaryKey = 'ID';
    protected $fillable = ['Nombre', 'CorreoElectronico', 'Contrasena', 'NumeroTelefono', 'UbicacionLatitud', 'UbicacionLongitud', 'Disponible', 'RolID'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'RolID');
    }

    public function trips()
    {
        return $this->hasMany(Trip::class, 'ConductorID');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'ConductorID');
    }

    public function sessions()
    {
        return $this->hasMany(Session::class, 'ConductorID');
    }
}
