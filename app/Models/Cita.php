<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    //protected $fillable = ['servicio_id','fecha','hora','user_id'];

    
    /*  public function sala(){
        return $this->belongsToMany(Usuario::class); 
    } */ 
    public function servicio(){
        return $this->hasOne(Servicio::class);
    }

    public function user(){
        return $this->belongsTo(Usuario::class); 
    }
}
