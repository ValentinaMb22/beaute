<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Categoria;
use App\Models\Servicio;
use App\Models\Sala;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $servicios = Servicio::simplePaginate(3);
         return view('admin.servicios.index',compact('servicios')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salas = Sala::all();
        $categorias = Categoria::all();
        return view('admin.servicios.create',compact('salas','categorias')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new Servicio;
        $servicio->sala_id = $request->sala_id;
        $servicio->categoria_id = $request->categoria_id;
        $servicio->categoria_id = $request->categoria_id;
        $servicio->nombre = $request->nombre;
        $servicio->precio = $request->precio;
        $servicio->descripcion = $request->descripcion;
        $imagen = $request->file('imagen');
            $imagen->move('img', $imagen->getClientOriginalName());
            $servicio->imagen = $imagen->getClientOriginalName();
        $servicio->save();
        /* $servicio = Servicio::create($request->all());*/
        return redirect()->route('admin.servicios.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        return view('admin.servicios.show',compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        $salas = Sala::all();
        $categorias = Categoria::all();
        return view('admin.servicios.edit',compact('salas','categorias','servicio')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $servicio ->update($request->all());
        return redirect()->route('admin.servicios.show',$servicio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();
        return redirect()->route('admin.servicios.index');
    }
}
