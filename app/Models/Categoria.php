<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    public function servicio(){
        return $this->hasMany(Servicio::class,'id');
    }

}
