<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $primaryKey = 'ID';
    protected $fillable = ['UsuarioID', 'ConductorID', 'FechaHoraSolicitud', 'OrigenLatitud', 'OrigenLongitud', 'DestinoLatitud', 'DestinoLongitud', 'EstadoViaje', 'Costo', 'MetodoPago'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UsuarioID');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'ConductorID');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'ViajeID');
    }
}
