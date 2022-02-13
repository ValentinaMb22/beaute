@extends('adminlte::page')

@section('title', 'Crear-Servicios')

@section('content_header')
    <h1>Crear servicios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('servicios.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Sala de belleza:</label>
                        <select name="sala_id" class="form-control">
                            <option selected="true" disabled="disabled">Seleccione una sala de belleza</option>
                            @foreach ($salas as $sala)
                                <option value="{{ $sala->id }}"> {{ $sala->nombre }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('sala') }}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Categoría:</label>
                        <select name="categoria_id" class="form-control">
                            <option selected="true" disabled="disabled">Seleccione una catoría</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('sala') }}</small>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Nombre:</label><br>
                        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                        @error('nombre')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Imagen:</label><br>
                        <input type="file" name="imagen" class="form-control" value="{{ old('imagen') }}">
                        @error('imagen')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label>Precio:</label><br>
                        <input type="text" name="precio" class="form-control" value="{{ old('precio') }}">
                        @error('precio')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label>Descripción:</label><br>
                        <textarea name="descripcion" class="form-control" rows="1">{{ old('descripcion') }}</textarea>
                        @error('descripcion')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>

                    <div class="col-md-12 mt-4 text-center align-content-center">
                        <button type="submit" class="btn btn-info">Crear</button>
                    </div>

                </div>
            </form>
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
