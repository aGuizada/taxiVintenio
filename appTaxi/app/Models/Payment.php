<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $primaryKey = 'ID';
    protected $fillable = ['ViajeID', 'Monto', 'MetodoPago'];

    public function trip()
    {
        return $this->belongsTo(Trip::class, 'ViajeID');
    }
}
