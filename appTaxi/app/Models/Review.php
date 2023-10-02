<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $primaryKey = 'ID';
    protected $fillable = ['UsuarioID', 'ConductorID', 'Calificacion', 'Comentario'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UsuarioID');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'ConductorID');
    }
}
