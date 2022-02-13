@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
<a href="{{route('usuarios.create')}}" class="btn btn-info">Crear usuario</a>
<div class="card" style="margin-top: 10px">
    <div class="card-body">
            <table class="table table-success table-striped table-info">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                @foreach ($usuarios as $usuario)
                    <tbody>
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td><a title=" Ver usuario" href="{{route('usuarios.show',$usuario)}}">{{$usuario->nombres}}</a></td>
                            
                             <form action="{{route('usuarios.destroy',$usuario)}}" method="POST">
                                @csrf
                                @method('delete')
                            <td><a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-info">Editar</a>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                           </form>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <div class="d-flex justify-content-end">
                {!!$usuarios->links()!!}
            </div>
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
