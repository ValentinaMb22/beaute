@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Categorías</h1>   
@stop

@section('content')
<a href="{{route('categorias.index')}}" class="btn btn-info">Volver a categorias</a>
<a href="{{route('categorias.create')}}" class="btn btn-info">Crear categoría</a>
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
                @foreach ($categorias as $categoria)
                    <tbody>
                        <tr>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->nombre}}</td>
                            
                            <form action="{{route('categorias.destroy',$categoria)}}" method="POST">
                                @csrf
                                @method('delete')
                            <td><a href="{{route('categorias.edit',$categoria)}}" class="btn btn-info">Editar</a>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                           </form>
                        </tr>
                    </tbody>
                @endforeach
            </table>
             <div  class="pagination">
              {!!$categorias->links()!!}
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
