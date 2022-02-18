<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(6);
        //return $usuarios;
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if (isset($validaciones)) {
            $user = new User;
            $user->name = $request->nombre;
            $user->email = $request->nombre;
            $user->password = $request->correo;
           
            $foto = $request->file('foto');
            $foto->move('img', $foto->getClientOriginalName());
            $user->foto = $foto->getClientOriginalName();
            $user->save();
            session()->flash('message', 'Usuario     creado
                satisfactoriamente!!');
            return redirect()->route('users.index');
        }
        /* $usuario = User::create($request->all());
        return redirect()->route('users.show',compact('users')); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       /*  $validaciones = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]); */
        /* if (isset($validaciones)) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            if (isset($request->foto)) {
                //si existe un nuevo archivo de imagen el primer paso es eliminarlo
                $image_path = public_path().'/img/'.$user->foto;
                unlink($image_path);
                //despues le asigno el nuevo     archivo que me llega por el request
                $foto = $request->file('foto');
                $foto->move('img', $foto->getClientOriginalName());
                $user->foto = $foto->getClientOriginalName();
            } else {
                $user->foto = $user->foto;
            }
            $user->save();
        }
        session()->flash('update', 'Usuario actualizado satisfactoriamente!!');
        return redirect()->route('users.index'); */
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit',$user)->with('info',' usuario asignado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
