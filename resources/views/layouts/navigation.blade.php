<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="image/logoBeauteApp.png" alt="logo" width="100"  class="d-inline-block align-text-top">
            BeautéApp
        </a>
    </div>
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="{{route('nosotros')}}
                ">Sobre nosotros</a>
                <a class="nav-link" href="{{route('contacto')}}"> Contáctenos</a>
                @if (Auth::user())
                
                 <a class="nav-link" href="{{route('admin.home')}}">Dashboard</a>
               

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-info">Salir</button>
                    </form>
                @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-info" href="{{ route('register') }}" id="testimonio" style="margin-right:10px ">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-info" href="{{ route('login') }}" id="contacto">Iniciar sesión</a>
                    </li>
                @endif
            </div>
        </div>
    </div>
</nav>
