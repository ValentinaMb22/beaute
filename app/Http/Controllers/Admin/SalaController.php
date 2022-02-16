<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Servicio;
use App\Http\Requests\SalaRequest;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas =  Sala::simplePaginate(3);
        return view('admin.salas.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaciones = request()->validate([
            'nombre' => 'required',
            'logotipo' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);
        if (isset($validaciones)) {
            $sala = new Sala;
            $sala->nombre = $request->nombre;
            $sala->logotipo = $request->nombre;
            $sala->correo = $request->correo;
            $sala->direccion = $request->direccion;
            $sala->telefono = $request->telefono;
            $logotipo = $request->file('logotipo');
            $logotipo->move('img', $logotipo->getClientOriginalName());
            $sala->logotipo = $logotipo->getClientOriginalName();
            $sala->save();
            session()->flash('message', 'Sala creada
                satisfactoriamente!!');
            return redirect()->route('salas.index');
        }
        // $sala = Sala::create($request->all());
        //return redirect()->route('salas.index',$sala);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sala $sala)
    {
        $servicios = Servicio::join("salas","servicios.sala_id","=","salas.id")
        ->where("sala_id",$sala->id)
        ->select("servicios.nombre","servicios.descripcion","servicios.precio",)
        ->get();
       // return $servicios;
        return view('admin.salas.show', compact('sala','servicios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sala $sala)
    {
        return view('admin.salas.edit', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sala $sala)
    {
        $validaciones = request()->validate([
            'nombre' => 'required',
            'logotipo' => 'required',
            'correo' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
        ]);
        if (isset($validaciones)) {
            $sala->nombre = $request->nombre;
            $sala->correo = $request->correo;
            $sala->direccion = $request->direccion;
            if (isset($request->logotipo)) {
                //si existe un nuevo archivo de imagen el primer paso es eliminarlo
                $image_path = public_path().'/img/'.$sala->logotipo;
                unlink($image_path);
                //despues le asigno el nuevo     archivo que me llega por el request
                $logotipo = $request->file('logotipo');
                $logotipo->move('img', $logotipo->getClientOriginalName());
                $sala->logotipo = $logotipo->getClientOriginalName();
            } else {
                $sala->logotipo = $sala->logotipo;
            }
            $sala->save();
        }
        session()->flash('update', 'Sala actualizada satisfactoriamente!!');
        return redirect()->route('admin.salas.index');


        //$sala->update($request->all());
        //return redirect()->route('salas.show',$sala);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala $sala)
    {
        $sala->delete();
        return redirect()->route('salas.index');
    }
}
