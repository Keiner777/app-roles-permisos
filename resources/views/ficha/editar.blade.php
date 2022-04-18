@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar ficha</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>!Revise los campos!</strong>
                            @foreach ($errors->all() as $error )
                            <span class="badge badge-danger">{{$error}}</span>
                            @endforeach

                            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            
                        </div>
                        @endif


                        <form  action="{{ route('ficha.update', $ficha->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="numero">Numero</label>
                                    <input type="number" name="numero" class="form-control" value="{{$ficha->numero}}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="nombre_programa">Nombre del programa</label>
                                    <input type="text" name="nombre_programa" class="form-control" value="{{$ficha->nombre_programa}}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="fecha_inicio">Fecha de inicio</label>
                                    <input type="date" name="fecha_inicio" class="form-control" value="{{$ficha->fecha_inicio}}">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="fecha_fin">Fecha de finalizacion</label>
                                    <input type="date" name="fecha_fin" class="form-control" value="{{$ficha->fecha_fin}}">
                                </div>
                            </div>

                            

                                
                                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                            </div>
                            
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
