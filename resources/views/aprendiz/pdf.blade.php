<div class="section-body ">
    <div class="row ">

        <div class="col-lg-12">
            <div class="card ">

                <div class="card-body ">

                    <table class="table table-dark table-bordered  mt-3 ">
                        <thead style="background-color: rgb(193, 209, 204)">
                            <th style="display: none" class="table-primary">ID</th>
                            <th class="table-secondary">imagen</th>
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
                                <td>
                                    <div  class="img m-1" >
                                        <img style="border-radius:20px; " src="{{public_path("/imagen/".$aprendiz->imagen)}}"
                                width="100px" height="100px" alt="...">
                </div>
                </td>

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



{{-- hoja de vida  --}}

<div style="border: 2px solid black; border-radius: 10px" class="contenedor">

    <h1 style="text-align: center">Hoja de vida</h1>
    <div class="">
        <table class="">
            <thead style="background-color: rgb(193, 209, 204)">
            </thead>
            <tbody>
                @foreach ($aprendiz_index as $aprendiz)
                <tr>
                    <td>
                        <div style="margin-left:300px;"  class="img m-1" >
                            <img style="  border-radius:20px; margin: 0 auto; " src="{{public_path("/imagen/senA.png")}}"
                    width="100px" height="100px" alt="...">
    </div>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    

    <div style="display: inline-block;  border-radius: 5px; height: 400px; width: 30%; background-color: rgba(255, 68, 0, 0.63); margin-top: 150px" class="perfil">

        <div class="foto">
            

            <table class="">
                <thead style="background-color: rgb(193, 209, 204)">
                    
                    


                </thead>
                <tbody>
                    @foreach ($aprendiz_index as $aprendiz)
                    <tr>
                        {{-- <td style="display: none">{{$aprendiz->id}}</td> --}}
                        <td>
                            <div style="margin-left:50px;"  class="img m-1" >
                                <img style="  border-radius:20px; margin: 0 auto; " src="{{public_path("/imagen/".$aprendiz->imagen)}}"
                        width="100px" height="100px" alt="...">
        </div>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>










        </div>

        <div class="contacto">
            <h1 style="border-bottom: 2px solid black; width: 90%">Contacto</h1>

            <h3>Telefono</h3>
            <div class="telefono">
                <table class="">
                    <thead style="background-color: rgb(193, 209, 204)">
                        
                        
    
    
                    </thead>
                    <tbody>
                        @foreach ($aprendiz_index as $aprendiz)

                        <td>{{$aprendiz->telefono}}</td>
                        
            </tr>
            @endforeach
            </tbody>
            </table>
            </div>
            <h3>Gmail</h3>

            <table class="">
                <thead style="background-color: rgb(193, 209, 204)">
                    
                    


                </thead>
                <tbody>
                    @foreach ($aprendiz_index as $aprendiz)

                    <td>{{$aprendiz->email}}</td>
                    
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>




    </div>


    <div style="display: inline-block; border-radius: 5px; height: 400px; width: 69%; background-color: aquamarine; margin-top: 150px" class="datos">

        <div style="" class="nombre">
            <table class="">
                <thead style="background-color: rgb(193, 209, 204)">
                    
                    


                </thead>
                <tbody>
                    @foreach ($aprendiz_index as $aprendiz)

                    <span style="font-size: 30px; margin-left: 150px; margin-right: 10px;">{{$aprendiz->nombre}}</span>
                    <span style="font-size: 30px">{{$aprendiz->apellido}}</span>
                    <h3 style="margin-left: 150px;">Software Developer</h3>
                    <h3 style="text-decoration: underline">Perfil:</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A nesciunt earum eius eos, harum neque voluptate nemo id nobis, non quod ad voluptas recusandae temporibus facilis porro consectetur doloribus maiores.</p>
                    
        </tr>
        @endforeach
        </tbody>
        </table>

        </div>

        <div class="datosSena">

            <h1  style="text-decoration: underline">Datos Academicos</h1>
        </div>



    </div>

</div>








