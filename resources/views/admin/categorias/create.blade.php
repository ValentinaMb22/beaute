@extends('adminlte::page')

@section('title', 'Crear categoría')
{{-- @section('plugins.Sweetalert2', true) --}}

@section('content_header')
    <h1>Crear categoría</h1>
@stop

@section('content')
<a href="{{route('admin.categorias.index')}}" class="btn btn-info">Volver a Categorías</a>
    <div class="card" style="margin-top: 20px">
        <div class="card-body">
            {{-- formulario para crear una categoria --}}
            <form action="{{ route('admin.categorias.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-11 col-sm-12">
                        <label for="">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                        @error('nombre')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mt-4 text-center align-content-center">
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    {{-- fin del formulario de registro --}}
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
        Swal.fire(
            'Good job!',
            'categoria creada correctamente!',
            'success'
        )
    </script>
@stop
