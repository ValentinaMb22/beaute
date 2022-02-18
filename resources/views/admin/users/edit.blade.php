@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
   <strong>{{session('info')}}</strong>
</div>
    
@endif

    <div class="card" style="width:60%;margin:auto">
        <div class="card-body">
         
             <form action="{{route('admin.users.update',$user)}}" method="POST">  
              @method('put')  
              @csrf 

                <label for="">Nombres:</label><br>
                <input type="text" name="nombres" class="form-control" value="{{old('nombres',$user->name)}}">
                @error('nombres')
                  <small class="text-danger">*{{$message}}</small>
                @enderror <br>
              
                 <p>Listado de roles</p>
                 {!! Form::model($user, ['route'=> ['admin.users.update',$user],'method'=>'put'])!!}
                 @foreach ($roles as $role)
                 <div class="form-control" >
                   <label for="">
                     {!! Form::checkbox('roles[]',$role->id,null,['class'=>'mr-1']) !!}
                     {{$role->name}}
                   </label>
                 </div>     
                 @endforeach

                 <div class="col-md-12 mt-4 text-center align-content-center">
                  {!! Form::submit('Asignar rol', ['class'=>'btn btn-info']) !!}
                 </div>
                 
                 {!! Form::close() !!}
              
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
