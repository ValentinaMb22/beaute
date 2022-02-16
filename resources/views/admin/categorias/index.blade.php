@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Categorías</h1>   
@stop

@section('content')
<a href="{{route('admin.categorias.create')}}" class="btn btn-info">Crear categoría</a>
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
                            <td><a href="{{route('admin.categorias.show',$categoria)}}">{{$categoria->id}}</a></td>
                            <td><a title="Ver categoría" href="{{route('admin.categorias.show',$categoria)}}">{{$categoria->nombre}}</a></td>
                            
                            <form action="{{route('admin.categorias.destroy',$categoria)}}" method="POST">
                                @csrf
                                @method('delete')
                            <td><a href="{{route('admin.categorias.edit',$categoria)}}" class="btn btn-info">Editar</a>
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
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
