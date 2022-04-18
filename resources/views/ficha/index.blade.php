@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Fichas</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        @can('crear-ficha')
                        <a class="btn btn-warning" href="{{route('ficha.create')}}">Nueva</a>
                        @endcan

                        <table class="table table table-dark table-hover mt-3">
                            <thead style="background-color: aquamarine">
                                <th style="display: none" class="table-primary">ID</th>
                                <th class="table-secondary">Numero</th>
                                <th class="table-success">Nombre del programa</th>
                                <th class="table-success">Fecha de inicio</th>
                                <th class="table-warning">Fecha de finalizacion</th>
                                <th class="table-success">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($ficha_index as $ficha)
                                <tr>
                                    <td style="display: none">{{$ficha->id}}</td>
                                    <td>{{$ficha->numero}}</td>
                                    <td>{{$ficha->nombre_programa}}</td>
                                    <td>{{$ficha->fecha_inicio}}</td>
                                    <td>{{$ficha->fecha_fin}}</td>
                                    <td>

                                        <form  action="{{ route('ficha.destroy', $ficha->id) }}" method="POST">

                                            @can('editar-ficha')
                                            <a class="btn btn-info" href="{{route('ficha.edit',$ficha->id)}}">Editar</a>
                                            @endcan
                                            @csrf

                                            @method('DELETE')
                                            @can('borrar-ficha')
                                            <button type="submit" class="btn btn-danger mt-2 mb-2">Borrar</button>
                                            @endcan
                                        </form>


                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <div class="pagination justify-content-end">
                            {!!$ficha_index->links()!!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
