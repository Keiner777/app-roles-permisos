
<div style="border: 2px solid black; border-radius: 5px; height: 709px;">

    <h1 style="text-align: center; font-size: 30px">Hoja de vida</h1>

    <div class="img" style="display: inline-block">

        <img style="border-radius:20px; margin-left: 300px; margin-bottom:50px "
        src="{{public_path("/imagen/senA.png")}}" alt="..." width="100px" height=" 100px">
    </div>
  
  <div >
  
    {{-- contacto  --}}
      <div style="border-radius: 10px ; display: inline-block; background-color: rgb(209, 123, 10); width: 30%; margin-top: 100px; height: 500px; ">
  
        <div class="img m-1">
            <img style="border-radius:20px; margin-left: 50px ;"
                src="{{public_path("/imagen/".$aprendiz_show->imagen)}}" width="100px"
                height="100px" alt="...">
        </div>
  
          <div >
              <h1 style="color: black; text-decoration: underline; margin-left: 10px ">Contacto:</h1>
          </div>
  
          <div style=" margin-top: 10px; ">
              <div style="display: inline-block" class="img">
  
                  <img style="border-radius:20px; "
                  src="{{public_path("/imagen/gmail.png")}}" alt="...">
              </div>
              <div style="display: inline-block" class="texto" style="color: black">
  
                  {{$aprendiz_show->email}}
  
              </div>
          </div>

          <div style="margin-top: 10px; ">
            <div class="img" style="display: inline-block">

                <img style="border-radius:20px; "
                src="{{public_path("/imagen/phone.png")}}" alt="...">
            </div>
            <div class="texto" style="color: black; display: inline-block">

                {{$aprendiz_show->telefono}}

            </div>
        </div>


          {{-- redes sociales  --}}

          <div >
            <h3 style="color: black; text-decoration: underline; margin-left: 10px ">Redes Socailes:</h3>
        </div>

        <div style="margin-top: 10px; margin-left:50px;  " class="redesSociales">

            <div class="img" style="display: inline-block">

                {{-- lind  --}}
                <img style="border-radius:20px; "
                src="{{public_path("/imagen/linkedin.png")}}" alt="...">
            </div>
            {{-- git  --}}
            <div class="img" style="display: inline-block">

                <img style="border-radius:20px; margin-left: 15px ; "
                src="{{public_path("/imagen/github.png")}}" alt="...">
            </div>
            {{-- whasa  --}}
            <div class="img" style="display: inline-block">

                <img style="border-radius:20px; margin-left: 15px "
                src="{{public_path("/imagen/whatsapp.png")}}" alt="...">
            </div>
        </div>


        {{-- sobre mi  --}}

        <div >
            <h3 style="color: black; text-decoration: underline; margin-left: 10px ">Sobre mi:</h3>
            <p style="color: black; margin-left:10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rem aspernatur inventore repellat nihil.</p>
        </div>

    
  
  
      </div>
  
      {{-- datos  --}}
  
      <div style="display: inline-block; width: 69%; margin-top: 100px; height: 500px;">
  
        <div class="nombre">
            <span style="margin-left:70px; font-size: 50px; color:rgb(209, 123, 10);  ">{{$aprendiz_show->nombre}}</span>
            <span style=" font-size: 50px; color:rgb(209, 123, 10);">{{$aprendiz_show->apellido}}</span>
            <h2 style="text-align: center"> Sotfware Developer</h2>
            </div>
    
            {{-- habilidades  --}}
    
            <div style="display: inline-block;" >
                <h3 style="color: black; text-decoration: underline; margin-left: 10px ">Habilidades:</h3>
                <ul style="margin-left: 5px ">
                    <li>Laravel</li>
                    <li>Spring boot</li>
                    <li>Wordpress</li>
                    <li>Javascripts</li>
                    <li>Consumo de API</li>
                </ul>
            </div>


            <div style="margin-top: 10px; margin-left:50px;  display: inline-block; " class="habilidades">

                <div class="img" style="display: inline-block">
    
                    {{-- java  --}}
                    <img style="border-radius:20px; width: 50px; height: 50px;"
                    src="{{public_path("/imagen/java.png")}}" alt="...">
                </div>
                {{-- php  --}}
                <div class="img" style="display: inline-block">
    
                    <img style="border-radius:20px; margin-left: 15px ; width: 50px; height: 50px; "
                    src="{{public_path("/imagen/php.png")}}" alt="...">
                </div>
                {{-- javascripts  --}}
                <div class="img" style="display: inline-block">
    
                    <img style="border-radius:20px; margin-left: 15px; width: 50px; height: 50px; "
                    src="{{public_path("/imagen/javascript.png")}}" alt="...">
                </div>
                {{-- worpress  --}}
                <div class="img" style="display: inline-block">
    
                    <img style="border-radius:20px; margin-left: 15px; width: 50px; height: 50px; "
                    src="{{public_path("/imagen/wordpress.png")}}" alt="...">
                </div>
            </div>

            <div style="width: 80%; margin-left: 20px ">



                <hr>
                
            </div>


            {{-- Educacion  --}}
        <div style="display: inline-block; margin-top: 50px;" >
            
            <div class="">
                <h3 style="color: black; text-decoration: underline; margin-left: 10px ">Eduacion</h3>
                <ul style="margin-left: 10px ">
                    <li>Ingles</li>
                    <li>{{$aprendiz_show->nombre_programa}}</li>
                </ul>
                
            </div>

            
        </div>

        <div style="display: inline-block; margin-left:70px">
            <h3 style="color: black; text-decoration: underline; margin-left: 10px ">Instutición</h3>
            <ul style="margin-left: 10px ">
                <li>SENA</li>
                <li>{{$aprendiz_show->nodo}}</li>
            </ul>
        </div>
            
      </div>



  </div>
      
  
  
  </div>
  
