@extends('adminlte::page')

@section('title', 'Salas')

@section('content_header')
    <h1>Bienvenido a la pagina principal de salas</h1>
@stop

@section('content')

    {{-- aqui comienza el la vista para mostrar las salas --}}
    @can('admin.salas.create', $post)
        <a href="{{ route('salas.create') }}" class="btn btn-info">Crear sala</a>
    @endcan

    <div class="card">
        <div class="card-body">
            <table class="table table-success table-striped table-info">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Logotipo</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                @foreach ($salas as $sala)
                    <tbody>
                        <tr>
                            <td>{{ $sala->id }}</td>
                            <td><a title="Ver sala" href="{{ route('salas.show', $sala) }}">{{ $sala->nombre }}
                                </a>
                            </td>
                            <td>
                                <div class="imagen">
                                    <img class=" img-fluid" src="{{ asset('img/' . $sala->logotipo) }}" alt="logotipo">
                                </div>
                            </td>
                            <td>{{ $sala->direccion }}</td>
                            <td>{{ $sala->telefono }}</td>

                            {{-- <form action="{{ route('salas.destroy', $sala) }}" method="POST">
                                @csrf
                                @method('delete')
                                <td class="grid"><a href="{{ route('salas.edit', $sala) }}"
                                        class="btn btn-info">Editar</a>
                                    <button class="btn btn-danger">Eliminar</button>
                                </td> --}}

                            <td class="grid">
                                <a href="{{ route('salas.edit', $sala) }}" class="btn btn-secondary"><i
                                        class="far fa-edit"></i></a>
                                <form action="{{ route('salas.destroy', $sala) }}" method="POST">
                                    @csrf @method('delete')
                                    <button type="submit" class="btn btn-secondary"><i class="far fa-trash-alt"></i></button>
                                </form>
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

    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
