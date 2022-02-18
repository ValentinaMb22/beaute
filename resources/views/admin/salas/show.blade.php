@extends('adminlte::page')

@section('title', 'Ver sala')

@section('content_header')
    <h1>{{$sala->nombre}}</h1>
@stop

@section('content')
<a href="{{route('admin.salas.index')}}" class="btn btn-info">Volver a salas</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-light table-striped table-info">
                <thead>
                    <tr>
                        <th>Servicios</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                @foreach ($servicios as $servicio)
                    <tbody>
                        <tr>  
                            <td>{{$servicio->nombre}}</td>
                            <td>
                                <div class="imagen">
                                    <img class=" img-fluid" src="{{ asset('img/' . $servicio->imagen) }}" alt="imagenServicio">
                                </div>
                            </td>
                            <td>{{$servicio->descripcion}}</td>
                            <td>{{$servicio->precio}}</td>
                            <td>
                                @if (Auth::user())
                            <a href="{{ route('getSala',$sala) }}" class="btn btn-info">Agendar cita</a>
                        @else
                            <a href="{{ route('login') }}" class=" btn btn-info">Iniciar sesión</a>
                            <a href="{{ route('register') }}" class=" btn btn-info">Registrarme</a>
                        @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
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
    <script> console.log('Hi!'); </script>
@stop