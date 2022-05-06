@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Aprendiz</h3>

        <div class="row mx-auto">
            <div class="col-xl-12 text-right">
                <a href="{{ route('download-pdf') }}" class="btn btn-success btn-sm">Exportar PDF</a>
            </div>
        </div>
    </div>

    <div class="section-body ">
        <div class="row ">
            
            <div class="col-lg-12">
                <div class="card ">

                    


                    <div class="card-body ">

                        <table class="table table-dark table-bordered  mt-3 ">
                            <thead style="background-color: rgb(193, 209, 204)">
                                <th style="display: none" class="table-primary">ID</th>
                                <th class="table-secondary">Imagen</th>
                                <th class="table-secondary">Nombre</th>
                                <th class="table-success">Apellido</th>
                                <th class="table-success">Edad</th>
                                <th class="table-success">Telefono</th>
                                <th class="table-success">Email</th>
                                <th class="table-success">Ficha</th>
                                <th class="table-warning">Nombre del programa</th>
                                <th class="table-success">Instructor</th>
                                <th class="table-success">Nodo</th>
                                <th class="table-success">Acciones</th>

                            </thead>
                            <tbody>
                                @foreach ($aprendiz_index as $aprendiz)
                                <tr>
                                    <td style="display: none">{{$aprendiz->id}}</td>

                                    <td >
                                        <div  class="img m-1" >
                                            <img style="border-radius:20px; " src="/imagen/{{$aprendiz->imagen}}" alt="...">
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

                                    <td>

                                        <form  action="{{ route('aprendiz.destroy', $aprendiz->id) }}" method="POST">

                                            @can('editar-aprendiz')
                                            <a class="btn btn-info mt-1" href="{{route('aprendiz.edit', $aprendiz->id)}}">Editar</a>
                                            
                                            @endcan
                                        
                                            <a style="width: 150px" class="btn btn-warning mt-2 mb-2" href="{{route('aprendiz.show', $aprendiz->id)}}">Hoja de vida</a>
                                            @csrf


                                        </form>


                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <div class="pagination justify-content-end">
                            {!!$aprendiz_index->links()!!}
                        </div>

                    </div>

                    
                </div>
                
            </div>
        </div>
    </div>




   






























</section>
@endsection
