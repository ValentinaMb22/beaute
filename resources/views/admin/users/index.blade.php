@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
<a href="{{route('admin.users.create')}}" class="btn btn-info">Crear usuario</a>
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
                @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><a title=" Ver usuario" href="{{route('admin.users.show',$user)}}">{{$user->name}}</a></td>
                            
                             <form action="{{route('admin.users.destroy',$user)}}" method="POST">
                                @csrf
                                @method('delete')
                            <td><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-info">Editar</a>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                           </form>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <div class="d-flex justify-content-end">
                {!!$users->links()!!}
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
