<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'logotipo',
        'correo',
        'direccion',
        'telefono',
    ];
    public function comentario(){
        return $this->hasMany(Comentario::class); 
    }
    public function cita(){
        return $this->hasMany(Cita::class); 
    }
    public function servicio(){
        return $this->hasMany(Servicio::class); 
    }
    public function user(){
        return $this->hasMany(User::class); 
    }
}
