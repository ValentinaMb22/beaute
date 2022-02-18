@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Pagina principal de servicios</h1>
@stop

@section('content')
   
        <a href="{{ route('admin.servicios.create') }}" class="btn btn-info">Crear servicio</a>
   
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
                            <td>{{ $servicio->id }}</td>
                            <td><a href="{{ route('admin.servicios.show', $servicio) }}">{{ $servicio->nombre }}
                                </a>
                            </td>

                            <form action="{{ route('admin.servicios.destroy', $servicio->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                @can('admin.servicios.edit')
                                    <td><a href="{{ route('admin.servicios.edit', $servicio->id) }}"
                                            class="btn btn-info">Editar</a> 
                                @endcan
                                    @can('admin.servicios.destroy')
                                       <button class="btn btn-danger">Eliminar</button>
                                    @endcan
                                </td>

                            </form>
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
    <script>
        console.log('Hi!');
    </script>
@stop
