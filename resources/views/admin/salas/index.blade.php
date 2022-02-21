@extends('adminlte::page')

@section('title', 'Salas')

@section('content_header')
    
@stop

@section('content')

    {{-- aqui comienza el la vista para mostrar las salas --}}
    @can('admin.salas.create')
    <a href="{{ route('admin.salas.create') }}" class="btn btn-info">Crear sala</a>
    @endcan

    <div class="card">
        <div class="card-header">
            <h3>Bienvenido a la pagina principal de salas</h3>
        </div>
        <div class="card-body">
            <table class="table table-success table-striped table-info">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Logotipo</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        @can('admin.salas.update')
                           <th scope="col">Acciones</th>
                        @endcan
                    </tr>
                </thead>
                @foreach ($salas as $sala)
                    <tbody>
                        <tr>
                            <td>{{ $sala->id }}</td>
                            <td><a title="Ver sala" href="{{ route('admin.salas.show', $sala) }}">{{ $sala->nombre }}
                                </a>
                            </td>
                            <td>
                                <div class="imagen">
                                    <img class=" img-fluid" src="{{ asset('img/' . $sala->logotipo) }}" alt="logotipo">
                                </div>
                            </td>
                            <td>{{ $sala->direccion }}</td>
                            <td>{{ $sala->telefono }}</td>

                           {{--   <form action="{{ route('salas.destroy', $sala) }}" method="POST">
                                @csrf
                                @method('delete')
                                <td class="grid"><a href="{{ route('salas.edit', $sala) }}"
                                        class="btn btn-info">Editar</a>
                                    <button class="btn btn-danger">Eliminar</button>
                                </td>  --}}

                                <td class="grid">
                                    @can('admin.salas.edit')
                                    <a href="{{ route('admin.salas.edit', $sala) }}" class="btn btn-secondary"><i
                                        class="far fa-edit"></i></a>
                                    @endcan
                                    @can('admin.salas.destroy')
                                    <form action="{{ route('admin.salas.destroy', $sala) }}" method="POST">
                                        @csrf @method('delete')
                                        
                                          <button type="submit" class="btn btn-secondary"><i class="far fa-trash-alt"></i></button>
                                        
                                    </form>
                                    @endcan
                                </td>
                            </form>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <div class="pagination">
                {{ $salas->links() }}
            </div>
        </div>
    </div>
    {{-- aqui termina la vista para mostrar las salas --}}
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
        img {
            width: 100px;
            /* ANCHO_IMAGEN */
            border: solid silver 1px;
            height: 100px;
            /* ALTO_IMAGEN */
            background-position: center center;
            /* Centrado
                    de imagen*/
            background-repeat: no-repeat;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4px;
        }

        .grid a,
        button {
            width: 40px;
        }
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
