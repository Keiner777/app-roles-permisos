@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Blogs</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">


                        @can('crear-blog')
                        <a class="btn btn-warning" href="{{route('blogs.create')}}">Nuevo</a>
                        @endcan

                        <table class="table table table-dark table-hover mt-3">
                            <thead style="background-color: aquamarine">
                                <th style="display: none" class="table-primary">ID</th>
                                <th class="table-secondary">Titulo</th>
                                <th class="table-success">Contenido</th>
                                <th class="table-warning">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($blog_index as $blogs)
                                <tr>
                                    <td style="display: none">{{$blogs->id}}</td>
                                    <td>{{$blogs->titulo}}</td>
                                    <td>{{$blogs->contenido}}</td>
                                    <td>

                                        <form  action="{{ route('blogs.destroy', $blogs->id) }}" method="POST">

                                            @can('editar-blog')
                                            <a class="btn btn-info" href="{{route('blogs.edit',$blogs->id)}}">Editar</a>
                                            @endcan
                                            @csrf

                                            @method('DELETE')
                                            @can('borrar-blog')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>


                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <div class="pagination justify-content-end">
                            {!!$blog_index->links()!!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
