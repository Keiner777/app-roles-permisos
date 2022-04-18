@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Instructor</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        @can('crear-instructor')
                        <a class="btn btn-warning" href="{{route('instructor.create')}}">Nuevo</a>
                        @endcan

                        <table class="table table table-dark table-hover mt-3">
                            <thead style="background-color: aquamarine">
                                <th style="display: none" class="table-primary">ID</th>
                                <th class="table-success">Imagen</th>
                                <th class="table-secondary">Nombre</th>
                                <th class="table-success">Apellido</th>
                                <th class="table-success">Nombre del curso</th>
                                <th class="table-success">Ficha del curso</th>
                                <th class="table-warning">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($instructor_index as $instructor)
                                <tr>
                                    <td style="display: none">{{$instructor->id}}</td>
                                    <td>
                                        <div  class="img m-1" >
                                            <img style="border-radius:20px; " src="/imagen/{{$instructor->imagen}}" width="100px" height="100px" alt="...">
                                        </div>
                                    </td>
                                    <td>{{$instructor->nombre}}</td>
                                    <td>{{$instructor->apellido}}</td>
                                    <td>{{$instructor->nombre_curso}}</td>
                                    <td>{{$instructor->ficha_curso}}</td>
                                    <td>

                                        <form  action="{{ route('instructor.destroy', $instructor->id) }}" method="POST" class="formEliminar">

                                            @can('editar-instructor')
                                            <a class="btn btn-info" href="{{route('instructor.edit',$instructor->id)}}">Editar</a>
                                            @endcan
                                            @csrf

                                            @method('DELETE')
                                            @can('borrar-instructor')
                                            <button type="submit" class=" btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>


                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <div class="pagination justify-content-end">
                            {!!$instructor_index->links()!!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    
    @can('borrar-editar')
                           
    <h1 class="container">Importar Excel/Aprendices</h1>
      <div class="container py-5">


        <div class="row">
            
           <form action="{{route('aprendiz/excel')}}"  enctype="multipart/form-data" method="post">
            @csrf

            <div class="row">
                <div class="col">
                    <input type="file" name="excel" class="form-group" accept=".xlsx, .xls">
                    
                </div>

                <div class="col">
                    <button type="submit" value="importar" class="btn btn-success">Importar</button>
                </div>
            </div>
           </form>
        </div>
    @endcan



    
</section>
@endsection
<script>
    (function () {
  'use strict'
  //debemos crear la clase formEliminar dentro del form del boton borrar
  //recordar que cada registro a eliminar esta contenido en un form  
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Confirma la eliminación del registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>
