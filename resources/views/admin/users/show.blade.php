@extends('adminlte::page')

@section('title', ' Ver usuario')

@section('content_header')
    <h1>{{$user->name}}</h1>
@stop

@section('content')
<a href="{{route('users.index')}}" class="btn btn-info">Volver a usuarios</a><br><br>
<div class="card">
    <div class="card-body">
        <table class="table table-success table-striped table-info">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                   {{--   <th>Apellidos</th>
                    <th>Imagen</th>   --}}
                    <th>Correo</th>
                    <th>Contraseña</th>
                   {{--   <th>Estado</th>
                    <th>Tipo</th>  --}}
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        {{--  <td>{{$usuario->apellidos}}</td>
                        <td>{{$usuario->foto}}</td>  --}}
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        {{--  <td>{{$usuario->estado}}</td>
                        <td>{{$usuario->tipo}}</td>  --}}
                    </tr>
                </tbody>
        </table>
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
