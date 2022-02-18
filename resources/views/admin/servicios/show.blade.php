@extends('adminlte::page')

@section('title', 'Ver-servicio')

@section('content_header')
    <h1>Ver servicio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{route('admin.servicios.index')}}" class="btn btn-info">Volver a servicios</a><br><br>
<table class="table table-success table-striped table-info">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Descripción</th>
            <th>Precio</th>
        </tr>
    </thead>
        <tbody>
            <tr>
                <td>{{$servicio->id}}</td>
                <td>{{$servicio->nombre}}</td>
                <td>
                    <div class="imagen">
                        <img  height="100" width="100" class=" img-fluid" src="{{ asset('img/' . $servicio->imagen) }}" alt="servicio">
                    </div>
                </td>
                <td>{{$servicio->descripcion}}</td>
                <td>{{$servicio->precio}}</td>
            </tr>
        </tbody>
</table>
    </div>
</div>
<footer class="container">
    <div >
        <small>BeautéApp ©2022 | Todos los derechos reservados. 
        </small>
    </div>
</footer>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .container {
            width: 500px;
            margin: auto;
            position: fixed;
            bottom: 0;
            right: 300px;  
            color:rgb(10, 10, 10); 
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
