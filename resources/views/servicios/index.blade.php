@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Pagina principal de servicios</h1>
@stop

@section('content')
<a href="{{ route('servicios.create') }}" class="btn btn-info">Crear servicio</a>
   <div class="card">
       <div class="card-body">
        <table class="table table-success table-striped table-info">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            @foreach ($servicios as $servicio)
                <tbody>
                    <tr>
                        <td>{{$servicio->id}}</td>
                        <td><a href="{{route('servicios.show',$servicio)}}">{{$servicio->nombre}}
                        </a>
                        </td>
                        
                        <form action="{{route('servicios.destroy',$servicio->id )}}" method="POST">
                            @csrf
                            @method('delete')
                        <td><a href="{{route('servicios.edit',$servicio->id)}}" class="btn btn-info">Editar</a>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                       </form>
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
    <script>
        console.log('Hi!');
    </script>
@stop
