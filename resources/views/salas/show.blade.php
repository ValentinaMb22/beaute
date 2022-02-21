<x-app-layout>
<section class="dashboard">
    <a href="/" class="btn btn-info">Volver a salas</a>
    <div class="card">
        <div class="card-header">
            <h1>{{$sala->nombre}}</h1>
        </div>
        <div class="card-body">
            <table class="table table-light table-striped table-info">
                <thead>
                    <tr>
                        <th>Servicios</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                @foreach ($servicios as $servicio)
                    <tbody>
                        <tr>  
                            <td>{{$servicio->nombre}}</td>
                            <td>
                                <div class="imagen">
                                    <img  height="100" width="100" class=" img-fluid" src="{{ asset('img/' . $servicio->imagen) }}" alt="servicio">
                                </div>
                            </td>
                            <td>{{$servicio->descripcion}}</td>
                            <td>{{$servicio->precio}} COP</td>
                            <td>
                                @if (Auth::user())
                            <a href="{{ route('getSala',$sala) }}" class="btn btn-info">Agendar cita</a>
                        @else
                            <a href="{{ route('login') }}" class=" btn btn-info">Iniciar sesión</a>
                            <a href="{{ route('register') }}" class=" btn btn-info">Registrarme</a>
                        @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
            </table>
        </div>
    </div>
</section>
{{-- pie de pagina --}}
<footer>
    <div class="footercontainer">
        <small>BeautéApp ©2022 | Todos los derechos reservados.
            <address>Developer: Valentina Mosquera</address>
        </small>
    </div>
</footer>
</x-app-layout> 