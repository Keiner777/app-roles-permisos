<div class="section-body ">
    <div class="row ">
        
        <div class="col-lg-12">
            <div class="card ">

                <div class="card-body ">

                    <table class="table table-dark table-bordered  mt-3 ">
                        <thead style="background-color: rgb(193, 209, 204)">
                            <th style="display: none" class="table-primary">ID</th>
                            <th class="table-secondary">Nombre</th>
                            <th class="table-success">Apellido</th>
                            <th class="table-success">Edad</th>
                            <th class="table-success">Telefono</th>
                            <th class="table-success">Email</th>
                            <th class="table-success">Ficha</th>
                            <th class="table-warning">Nombre del programa</th>
                            <th class="table-success">Instructor</th>
                            <th class="table-success">Nodo</th>
                     

                        </thead>
                        <tbody>
                            @foreach ($aprendiz_index as $aprendiz)
                            <tr>
                                <td style="display: none">{{$aprendiz->id}}</td>
                                <td>{{$aprendiz->nombre}}</td>
                                <td>{{$aprendiz->apellido}}</td>
                                <td>{{$aprendiz->edad}}</td>
                                <td>{{$aprendiz->telefono}}</td>
                                <td>{{$aprendiz->email}}</td>
                                <td>{{$aprendiz->ficha}}</td>
                                <td>{{$aprendiz->nombre_programa}}</td>
                                <td>{{$aprendiz->instructor}}</td>
                                <td>{{$aprendiz->nodo}}</td>

                            

                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                  

                </div>

                
            </div>
            
        </div>
    </div>
</div>