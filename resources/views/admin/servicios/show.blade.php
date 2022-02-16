@extends('adminlte::page')

@section('title', 'Ver-servicio')

@section('content_header')
    <h1>Ver servicio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <a href="{{route('admin.servicios.index')}}" class="btn btn-info">Volver servicios</a><br><br>
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
