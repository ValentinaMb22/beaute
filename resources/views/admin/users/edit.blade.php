@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.users.update',$user)}}" method="POST">
              @method('put')  
              @csrf 
                <div class="row">
                  <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="">Nombres:</label><br>
                <input type="text" name="nombres" class="form-control" value="{{old('nombres',$user->name)}}">
                @error('nombres')
                  <small class="text-danger">*{{$message}}</small>
                @enderror <br>
                  </div>
            
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <label for="">Apellidos:</label><br>
                <input type="text" name="apellidos" class="form-control" value="{{old('apellidos',$user->apellidos)}}">
                @error('apellidos')
                  <small class="text-danger">*{{$message}}</small>
                @enderror <br>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                  <label for="">Foto:</label><br>
                <input type="file" name="foto" class="form-control" value="{{old('foto',$user->foto)}}">
                @error('foto')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                </div>
               
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <label for="">Correo:</label><br>
                <input type="email" name="email" class="form-control" value="{{old('email',$user->email)}}">
                @error('email')
                  <small class="text-danger">*{{$message}}</small>
                @enderror <br>
                </div>
            
                <div class="col-md-6 col-lg-6 col-sm-12">
                  <label for="">Contraseña:</label><br>
                <input type="password" name="password" class="form-control" value="{{old('password',$user->password)}}">
                @error('clave')
                  <small class="text-danger">*{{$message}}</small>
                @enderror <br>
                </div>

               <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="">Estado:</label>
                <select class="form-select form-control" aria-label="Default select example" name="estado">{{old('estado',$user->estado)}}
                    <option selected>{{old('estado',$user->estado)}}</option>
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                    <option value="3">Bloqueado</option>
                  </select>
                @error('estado')
                  <small class="text-danger">*{{$message}}</small>
                @enderror <br>
               </div>
            
               <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="">Tipo:</label>
                <select class="form-select form-control" aria-label="Default select example" name="tipo">
                    <option selected >{{old('tipo',$user->tipo)}}</option>
                    <option value="1">Superadministrador</option>
                    <option value="2">Administrador</option>
                    <option value="3">Empleado</option>
                    <option value="4">Cliente</option>
                  </select>
                @error('tipo')
                  <small class="text-danger">*{{$message}}</small>
                @enderror <br>
               </div>

               <div class="col-md-12 mt-4 text-center align-content-center">
                <button type="submit" class="btn btn-info">Guardar</button>
               </div>

                </div>
               </form>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
