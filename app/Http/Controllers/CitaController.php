<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Sala;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use phpDocumentor\Reflection\DocBlock\Tags\See;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $citas = User::join("users","citas.user_id","=","users.id")
        ->where("user_id",$user->id)
        ->select("users.name","users.id")
        ->get();
        return view('admin.citas.index',compact('citas','user'));

    }
    /* Metodo para obtener la sala */
    public function getSala(Sala $sala)
    {
       //return $sala;
       $servicios = Servicio::join("salas","servicios.sala_id","=","salas.id")
       ->where("sala_id",$sala->id)
       ->select("servicios.nombre","servicios.precio","servicios.id")
       ->get();
       return view('admin.citas.create',compact('sala','servicios'));
    } 
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Sala $sala)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = new Cita();
        $cita->servicio_id = $request->servicio_id;
        $cita->fecha = $request->fecha;
        $cita ->hora = $request->hora;
        $cita ->user_id = Auth::user()->id;
        $cita ->sala_id = $request->sala_id;
        //return $cita;
        $cita->save();
      
        /*  $cita = Cita::create($request->all());*/
        return redirect()->route('admin.citas.index');  
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUser(User $user)
    {
       //return $sala;
       
    } 
    public function show( Cita $cita, User $user)
    { 
        $users = User::join("citas","citas.user_id","=","citas.id")
        ->where("cita_id",$user->id)
        ->select("user.nombre","user.id")
        ->get();
       return view('admin.citas.show',compact('cita','user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
