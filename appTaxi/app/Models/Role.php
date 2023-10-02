<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'RolID';
    protected $fillable = ['Nombre'];

    public function users()
    {
        return $this->hasMany(User::class, 'RolID');
    }

    public function drivers()
    {
        return $this->hasMany(Driver::class, 'RolID');
    }
}
