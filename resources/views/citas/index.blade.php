<x-app-layout>
    <section style="margin-top: 10px;height:min-content;margin-bottom: 30px">
        <div class="card" style="width: 30%;margin:auto;padding:1% 5%">
            <div class="card-body;">
                 <table class="table table-success table-striped table-info">
                     <thead>
                         <tr>
                             <th>Id</th>
                             <th>Sala</th>
                             <th>Servicio</th>
                             <th>Fecha</th>
                             <th>Hora</th>
                         </tr>
                     </thead>
                     <tbody>
                        @foreach ($citas as $cita)
                         <tr>
                             <td><a href="{{route('citas.show',$cita)}}">{{$cita->id}}</a></td>
                             <td><a href="">{{$cita->sala_id}}</a></td>
                             <td><a href="">{{$cita->servicio_id}}</a></td>
                             <td><a href="">{{$cita->fecha}}</a></td>
                             <td><a href="">{{$cita->hora}}</a></td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
            </div> 
        </div>
    </section> 
    <footer>
        <div class="container">
            <small>BeautéApp ©2022 | Todos los derechos reservados. 
            </small>
        </div>
    </footer>  
</x-app-layout>
