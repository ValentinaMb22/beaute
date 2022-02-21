<x-app-layout>
    <section class="dashboard">
        <h1 class="text-info"> Salas vinculadas a nuestra plataforma</h1>
        <div class="d-flex contenedor1">
            @foreach ($salas as $sala)
                <div class="contenedor2">
                    <div class="contenedorImg">
                        <img src="{{ asset('img/' . $sala->logotipo) }}" class="imgfluid" alt="Portafolio 01 ">
                    </div>
                    <div style="margin-top: 5px;">
                        <div>
                            <h3>{{ $sala->nombre }}</3>
                        </div>
                        
                        <div class="contenedorOpc">
                        {{--      @if (Auth::user())
                            <a href="{{ route('getSala', $sala) }}" class="btn btn-info">Agendar cita</a>
                        @else
                            <a href="{{ route('login') }}" class=" btn btn-info">Iniciar sesión</a>
                        @endif  --}}
                       
                        <a href="{{route('salas.show',$sala)}}" class="btn btn-info">Ver más...</a>
                        
                        </div>
                    </div>
                </div>
            @endforeach
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
