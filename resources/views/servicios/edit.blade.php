@extends('adminlte::page')

@section('title', 'Editar-servicios')

@section('content_header')
    <h1>Editar servicios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('servicios.update', $servicio) }}" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Sala de belleza:</label>
                        <select name="sala_id" class="form-control">
                            <option selected="true" disabled="disabled">Seleccione una sala de belleza</option>
                            @foreach ($salas as $sala)
                                <option value="{{ old('sala_id', $sala->id) }}"> {{ $sala->nombre }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('sala') }}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Categoría:</label>
                        <select name="categoria_id" class="form-control">
                            <option selected="true" disabled="disabled">Seleccione una categoría</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('sala') }}</small>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Nombre:</label><br>
                        <input type="text" name="nombre" value="{{ old('nombre', $servicio->nombre) }}"
                            class="form-control">
                        @error('nombre')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Imagen:</label><br>
                        <input type="file" name="imagen" class="form-control"
                            value="{{ old('imagen', $servicio->imagen) }}">
                        @error('imagen')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label>Precio:</label><br>
                        <input type="text" name="precio" value="{{ old('precio', $servicio->precio) }}"
                            class="form-control">
                        @error('precio')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label>Descripción:</label><br>
                        <textarea name="descripcion" rows="1"
                            class="form-control">{{ old('descripción', $servicio->descripcion) }}</textarea>
                        @error('descripcion')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>

                    <div class="col-md-12 mt-4 text-center align-content-center">
                        <button type="submit" class="btn btn-info">Guardar</button>
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
