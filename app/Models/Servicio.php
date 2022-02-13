<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = [
        'sala_id',
        'categoria_id',
        'nombre',
        'imagen',
        'precio',
        'descripcion'
    ];
    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }
    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }
    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }
    
}
