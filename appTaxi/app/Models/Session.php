<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $primaryKey = 'ID';
    protected $fillable = ['UsuarioID', 'ConductorID', 'TokenSesion', 'FechaHoraInicio', 'FechaHoraCierre', 'RolID'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UsuarioID');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'ConductorID');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'RolID');
    }
}
