@extends('adminlte::page')

@section('title', 'Editar sala')

@section('content_header')
    <h1>Editar sala</h1>
@stop

@section('content')
    <a href="{{ route('admin.salas.index') }}" class="btn btn-info">Volver sala</a><br><br>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.salas.update', $sala) }}" method="POST" enctype="multipart/form-data">

                @method('put')
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Nombre:</label><br>
                        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $sala->nombre) }}">
                        @error('nombre')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Logotipo:</label><br>
                        <span class="btn btn-secondary btnfile">
                            <i class="far fa-images"></i>
                            <input accept="image/*" value="{{ $sala->logotipo }}" onchange="vistaPrevia(event)"
                                type="file" name="logotipo">
                        </span>
                        <small class="textdanger">{{ $errors->first('logotipo') }}</small>
                    </div>

                    <div class="imagen col-md-6 col-lg-6col-sm-12">
                        <label for="">Vista previa logotipo:</label><br>
                        <img src="{{ asset('img/' . $sala->logotipo) }}" id="img-logo" alt="logotipo">
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Correo:</label><br>
                        <input type="email" name="correo" class="form-control"
                            value="{{ old('correo', $sala->correo) }}">
                        @error('correo')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Dirección:</label><br>
                        <input type="text" name="direccion" class="form-control"
                            value="{{ old('direccion', $sala->direccion) }}">
                        @error('direccion')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror <br>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label>Teléfono:</label><br>
                        <input type="text" name="telefono" class="form-control"
                            value="{{ old('telefono', $sala->telefono) }}">
                        @error('telefono')
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
    <style type="text/css">
        .btn-file {
            position: relative;
            overflow: hidden;
            width: 100px;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        .btn-file i {
            font-size: 23px;
        }

        .imagen img {
            max-width: 100%;
            max-height: 10vh;
        }

    </style>
@stop

@section('js')
    <script>
        function ocultarAlerta() {
            document.querySelector(".alert").style.display = 'none';
        }
        setTimeout(ocultarAlerta, 3000);
        // vista previa de la imagen
        let vistaPrevia = () => {
            let leerImg = new FileReader();
            let id_img = document.getElementById('img-logo');
            leerImg.onload = () => {
                if (leerImg.readyState == 2) {
                    id_img.src = leerImg.result;
                }
            }
            leerImg.readAsDataURL(event.target.files[0])
        }
    </script>
@stop
