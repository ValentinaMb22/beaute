@extends('adminlte::page')

@section('title', 'crear usuario')

@section('content_header')
    <h1>Crear usuario</h1>
@stop

@section('content')
    <a href="{{ route('usuarios.index') }}" class="btn btn-info">Volver a usuarios</a><br><br>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('usuarios.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Nombres:</label>
                        <input type="text" name="nombres" class="form-control" value="{{ old('nombres') }}">
                        @error('nombres')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Apellidos:</label>
                        <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos') }}">
                        @error('apellidos')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Foto:</label>
                        <input type="file" name="foto" class="form-control" value="{{ old('foto') }}">
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Correo:</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Contraseña:</label>
                        <input type="password" name="clave" class="form-control" value="{{ old('clave') }}">
                        @error('clave')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <label for="">Estado</label>
                        <select class="form-select form-control" aria-label="Default select example"
                            name="estado">{{ old('estado') }}
                            <option selected>Estado:</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                            <option value="3">Bloqueado</option>
                        </select>
                        @error('estado')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <label for="">Tipo:</label>
                        <select class="form-select form-control" aria-label="Default select example"
                            name="tipo">{{ old('tipo') }}
                            <option selected>Tipo:</option>
                            <option value="1">Superadministrador</option>
                            <option value="2">Administrador</option>
                            <option value="3">Empleado</option>
                            <option value="3">Cliente</option>
                        </select>
                        @error('tipo')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-4 text-center align-content-center">
                        <button type="submit" class="btn btn-info">Crear</button>
                    </div>
                </div>
            </form>
        </div>
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
