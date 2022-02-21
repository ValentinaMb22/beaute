@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agendar cita</h1>
@stop

@section('content')
<section style="margin-top: 10px;height:min-content;margin-bottom: 30px">
    <div class="card" style="width: 30%;margin:auto;padding:1% 5%">
        <div class="card-body;">
           <h3>Sala: {{$sala->nombre}}</h3> 
            <p style="width:200px; margin: auto">Dirección: {{$sala->direccion}}</p>
            <img src="{{ asset('img/' . $sala->logotipo) }}"  alt="logotipoSala" width="150" height="100" style="margin:auto">
             {{--  Aquí empieza el formulario para agendar una cita  --}}
            <div class="col-10 mt-4">
                <form action="{{ route('admin.citas.store') }}" method="POST">
                @csrf
                  <label for="">Servicio:</label>
                    <select name="servicio_id" class="form-control">
                        <option selected="true" disabled="disabled">Seleccione un servicio:</option>
                         @foreach ($servicios as $servicio)
                            <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                        @endforeach  
                    </select>
                    <small class="text-danger">{{ $errors->first('servicio') }}</small>  

                 <label for="">Fecha de cita:</label>
                <input type="date" name="fecha" placeholder="Seleccione la fecha de la cita" class="formcontrol">
                <label for="">Hora de la cita:</label>
                <input type="time" name="hora" placeholder="Ingrese la hora de la cita" class="formcontrol">  
                <input type="hidden" name="sala_id" value="{{ $sala->id}}">
                 {{-- <input type="hidden" name="user_id" value="{{ $user->id}}"> --}} 
                <div class="row">
                    <div class="col-md-12 textcenter mt-4">
                        <button type="submit" class="btn btn-info">Agendar</button>
                    </div>
                </div>
            </form>
        </div>
    </div> 
    </div>
</section> 
 
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
            position: sticky;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
 