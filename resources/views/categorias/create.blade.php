@extends('adminlte::page')

@section('title', 'Crear categoría')

@section('content_header')
    <h1>Crear categoría</h1>
@stop

@section('content')
    <div class="card" style="margin-top: 20px">
        <div class="card-body">
            {{-- formulario para crear una categoria --}}
            <form action="{{ route('categorias.store') }}" method="POST">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
