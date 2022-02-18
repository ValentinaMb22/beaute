@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear sala</h1>
@stop

@section('content')
    @includeif('partials.errors')
    <div>
        <a href="{{ route('salas.index') }}" class="btn btn-info">Volver a salas</a>
    </div>
    {{-- formulario para crear una sala --}}
    <div class="card" style="margin-top: 20px">
        <div class="card-body">
            <form action="{{ route('salas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session()->has('message'))
                    <div class="alert alert-success alertdismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span ariahidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <label for="">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                        @error('nombre')
                            <small class="text-danger">*{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm12">
                        <label for="">Logotipo:</label><br>
                        <span class="btn btn-secondary btnfile">
                            <i class="far fa-images"></i>{{-- ícono --}}
                            <input accept="image/*" onchange="vistaPrevia(event)" type="file" name="logotipo">
                        </span>
                        <small class="textdanger">{{ $errors->first('logotipo') }}</small>
                    </div>
                    <div class="imagen col-md-6 col-lg-6 col-sm-12">
                        <label for="">Vista previa
                            Logotipo:</label><br>
                        <img src="" id="img-logo" alt="logotipoSala">
                    </div>
                
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="">Correo:</label>
                    <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
                    @error('correo')
                        <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label for="">Dirección:</label>
                    <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
                    @error('direccion')
                        <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12">
                    <label>Teléfono:</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                    @error('telefono')
                        <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-12 mt-4 text-center align-content-center">
                    <button type="submit" class="btn btn-info">Guardar</button>
                </div>
        </div>
        </form>
    </div>
    </div>
    {{-- fin del formulario de registro --}}
    <footer class="container">
        <div >
            <small>BeautéApp ©2022 | Todos los derechos reservados. 
            </small>
        </div>
    </footer>
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
        .btn-file i{
        font-size:23px;
        }
        .imagen img{
        max-width: 100%;
        max-height: 10vh;
        }
        .container {
            width: 500px;
            margin: auto;
            position: fixed;
            bottom: 0;
            right: 300px;  
            color:rgb(10, 10, 10); 
        }
        </style>
@stop


@section('js')
    <script>
        function ocultarAlerta() {
            document.querySelector(".alert").style.display
            = 'none';
            }
            setTimeout(ocultarAlerta,3000);
            // vista previa de la imagen
            let vistaPrevia = ()=>{
            let leerImg = new FileReader();
            let id_img = document.getElementById('img-logo');
            leerImg.onload = ()=>{
            if (leerImg.readyState == 2) {
            id_img.src = leerImg.result;
            }
            }
            leerImg.readAsDataURL(event.target.files[0])
            }
            
    </script>
@stop
