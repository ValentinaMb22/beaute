@extends('adminlte::page')

@section('title', 'Ver sala')

@section('content_header')
    <h1>{{$sala->nombre}}</h1>
@stop

@section('content')
<a href="{{route('salas.index')}}" class="btn btn-info">Volver a salas</a>
<a href="{{route('categorias.index')}}" class="btn btn-info">Categorías</a>
<a href="{{route('servicios.index')}}" class="btn btn-info" >Servicios</a>
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
                            <td>{{$servicio->imagen}}</td>
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop