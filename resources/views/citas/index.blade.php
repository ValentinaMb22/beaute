<x-app-layout>
    <section style="margin-top: 10px;height:min-content;margin-bottom: 30px">
        <div class="card" style="width: 60%;margin:auto;padding:1% 5%">
            <div class="card-body;">
                 <table class="table table-light table-striped table-info">
                     <thead>
                         <tr>
                             <th>Id</th>
                             <th>Sala</th>
                             <th>Servicio</th>
                             <th>Fecha</th>
                             <th>Hora</th>
                             <th>Usuario</th>
                             <th>Acciones</th>
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
                             <td><a href="">{{$cita->user_id}}</a></td>
                             <td class="d-flex">
                                <a href="" class="btn btn-danger">Cancelar</a>
                                <form action="" method="POST">
                                    @csrf @method('delete')
                                    <button type="submit" class="btn btn-secondary">Editar</button>
                                </form>
                            </td>
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
