<x-app-layout>
<h1>esta pagina muestra un cita en especifico</h1>
<a href="{{route('admin.citas.index')}}" class="btn btn-info">Volver a citas</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-light table-striped table-info">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Sala</th>
                        <th>Servicio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                </thead>
                       <tr>
                           <td>{{$cita}}</td>
                           
                       </tr>
            </table>
        </div>
    </div>
</x-app-layout>