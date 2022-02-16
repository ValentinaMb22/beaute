@extends('adminlte::page')

@section('title', 'Ver sala')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('content')
<a href="{{route('admin.salas.index')}}" class="btn btn-info">Volver a salas</a>
<a href="{{route('admin.categorias.index')}}" class="btn btn-info">Volver a Categorías</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-light table-striped table-info">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>  
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->nombre}}</td>
                        </tr>
                    </tbody>
                  
            </table>
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
    <script> console.log('Hi!'); </script>
@stop