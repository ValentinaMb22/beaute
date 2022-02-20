@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de citas</h1>
@stop

@section('content')

    <section style="margin-top: 10px;height:450px;margin-bottom: 30px">
        <div class="card" style="width: 60%;margin:auto;padding:1% 5%">
            <div class="card-body;">
                <table class="table table-light table-striped table-info">
                    <thead>
                        <tr>
                          
                            <th>Sala</th>
                            <th>Servicio</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Usuario</th>
                            @can('admin.citas.update')
                                
                            @endcan
                           {{--   <th>Acciones</th>  --}}
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach ($citas as $cita)
                            <tr> 
                                <td>{{ $cita->sala_id }}</a></td>
                                <td>{{ $cita->servicio_id }}</td>
                                <td>{{ $cita->fecha }}</td>
                                <td>{{ $cita->hora }}</a></td>
                                <td>{{ $cita->user_id}}</td> 
                                <form action="{{ route('admin.citas.destroy', $cita->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    @can('admin.citas.edit')
                                        <td class="d-flex">
                                            {{--  <a href="{{ route('admin.citas.edit', $cita->id) }}"
                                                class="btn btn-info">Editar</a>   --}}
                                    @endcan
                                        @can('admin.citas.destroy')
                                           <button class="btn btn-danger">Cancelar</button>
                                        @endcan
                                    </td>
    
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <small>BeautéApp ©2022 | Todos los derechos reservados.
            </small>
        </div>
    </footer>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        footer .container {
            width: 400px;
            margin: auto;
            position: fixed;
            bottom: 0;
            right: 300px;  
            color:rgb(14, 15, 15);
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
