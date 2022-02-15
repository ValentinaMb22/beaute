@extends('adminlte::page')

@section('title', 'Dashboard')  
 
@section('content_header')
    <h1>Tablero de mandos</h1>
@stop  
  
@section('content')
    <p>Bienvenido al panel de administrador.</p>
    <div class="card" style="height: 400px">
        <div class="card-body" style="background-image: url('image/welcome.jpg');background-size: cover">
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
