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
                                {{-- <td style="display: none">{{$aprendiz->id}}</td> --}}
                                {{-- <td>
                                    <div  class="img m-1" >
                                        <img style="border-radius:20px; " src="storage/imagen/{{$aprendiz->imagen}}" width="100px" height="100px" alt="...">
                                    </div>
                                </td> --}}

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

<div style=" border: 2px solid black; margin: 10px auto; border-radius: 5px;" >
    <h1 style="text-align: center">Hoja de vida</h1>
    
    <div>
        
        <div style="  background-color: rgba(211, 78, 12, 0.829); border-bottom: 2px solid black; color:
         rgb(3, 3, 3); margin: 5px; border-radius: 5px; padding: 5px; text-align: center; font-size: 30px; "> Datos Personales</div>
         

         <div class="" style="margin-top: 20px">

        <div style=" display: inline-block;  border: 2px solid rgb(80, 26, 26); width: 100px; height: 100px; border-radius: 10px; margin: 0 auto; margin-top: 20px;">Imagen</div>
        <div class="datosPersonales" style=" display: inline-block;  width: 250px; background-color:
         rgb(66, 66, 66); color: rgb(255, 255, 255); margin-top: -10px; border-radius: 5px; padding: 5px; text-align: center; ">

            <table style="padding: 5px;" class="table table-dark table-bordered  mt-3 ">
                <thead >
                    
                    <th class="table-secondary">Nombre</th>
                    <th class="table-success">Apellido</th>
                    <th class="table-success">Edad</th>
                    <th class="table-success">Telefono</th>
             

                </thead>
                <tbody>
                    @foreach ($aprendiz_index as $aprendiz)
                    <tr>
            

                        <td>{{$aprendiz->nombre}}</td>
                        <td>{{$aprendiz->apellido}}</td>
                        <td>{{$aprendiz->edad}}</td>
                        <td>{{$aprendiz->telefono}}</td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>

            

        </div>
         </div>
















        <div style=" background-color: rgba(211, 78, 12, 0.801); border-bottom: 2px solid black; color:
         rgb(0, 0, 0); margin: 5px; border-radius: 5px; padding: 5px; text-align: center; font-size: 30px; ">Nombre del Instructor</div>

         <div class="datosInstructor" style=" width: 130px; background-color:
         rgb(66, 66, 66); color: white; margin: 5px auto; border-radius: 5px; padding: 5px; text-align: center; ">

            <table style="padding: 5px;" class="table table-dark table-bordered  mt-3 ">
                <thead>
                    
                    <th class="table-success">Instructor</th>
                    <th class="table-success">Nodo</th>
             

                </thead>
                <tbody>
                    @foreach ($aprendiz_index as $aprendiz)
                    <tr>
            
                        <td>{{$aprendiz->instructor}}</td>
                        <td>{{$aprendiz->nodo}}</td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>

            

        </div>

        <div style=" background-color: rgba(211, 78, 12, 0.801); border-bottom: 2px solid black; color:
         rgb(0, 0, 0); margin: 5px; border-radius: 5px; padding: 5px; text-align: center; font-size: 30px; ">Programa de formacion</div>

         <div class="datosInstructor" style=" width: 370px; background-color:
         rgb(66, 66, 66); color: white; margin: 5px auto; border-radius: 5px; padding: 5px; text-align: center; ">

            <table style="padding: 5px;" class="table table-light table-bordered  mt-3 ">
                <thead>
                    
                    <th class="table-success">Email</th>
                    <th class="table-success">Ficha</th>
                    <th class="table-warning">Nombre del programa</th>
             

                </thead>
                <tbody>
                    @foreach ($aprendiz_index as $aprendiz)
                    <tr>
            
                        <td>{{$aprendiz->email}}</td>
                        <td>{{$aprendiz->ficha}}</td>
                        <td>{{$aprendiz->nombre_programa}}</td>
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>

            

        </div>


    </div>
 </div>

  