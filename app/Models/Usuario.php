<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;
    /* protected $fillable = [
        'nombres',
        'apellidos',
        'foto',
        'email',
        'clave',
        'estado', 
        'tipo',
    ]; */
    protected $guarded = [
        'id',
        'email_verified_at'
    ];
    public function cita()
    {
        return $this->hasMany(Cita::class);
    }
    public function comentario()
    {
        return $this->hasOne(Comentario::class);
    }
}
