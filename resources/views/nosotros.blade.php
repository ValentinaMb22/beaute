<x-app-layout>
    <section class="d-flex nosotros">
        <article class="contenedorArticulo">
            <h3>Quienes somos?</h3>
            <p>
                Beauté surge de la necesidad de optimizar los procesos en las salas de belleza de la ciudad de Popayán,
                con la finalidad de que los servicios se presten de una manera más rápida y eficiente al utilizar el
                agendamiento de citas que ofrece el aplicativo. Para esto se tuvieron en cuenta los requerimientos de
                los usuarios, obtenidos a través de encuestas.
            </p>
        </article>

        <article class="contenedorArticulo">
            <h3>Misión</h3>
            <p>Sistematizar y modernizar el monitoreo
                de las salas de belleza o spa para así
                llevar un buen manejo y distribución
                de todos los servicios prestados, tanto
                para usuarios como dueños del
                negocio, satisfaciendo las necesidades
                dispuestas en la consolidación de
                es trategias de atención al cliente.</p>
        </article>
    </section>
    <section class="d-flex nosotros">
        <article class="contenedorArticulo">
            <h3>Visión</h3>
            <p>En el 2022 seremos una empresa distinguida y reconocida en el mundo de la cosmética y cuidado personal, logrando satisfacer las necesidades del cliente mediante la prestación de un servicio, con amplios niveles de calidad e innovación.
            </p>
        </article>
        <article class="contenedorArticulo">
            {{-- carrusel --}}
        <div style="height:350px; width:450px;margin:auto;">
            <h3 class="text-info">Galería</h3>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('image/welcome.jpg') }}" class="d-block w-100" alt="..."
                            style="height:300px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/sala7.jpg') }}" class="d-block w-100" alt="..."
                            style="height:300px">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('image/sala4.jpg') }}" class="d-block w-100" alt="..."
                            style="height:300px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- fin del carrusel --}}
        </article>
    </section>
    <footer>
        <div class="container">
            <small>BeautéApp ©2022 | Todos los derechos reservados. 
            </small>
        </div>
    </footer>
</x-app-layout>
