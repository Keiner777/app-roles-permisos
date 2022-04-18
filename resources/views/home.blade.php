@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Dashboard</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">



                        <div class="row">
                            {{-- card usuarios  --}}
                            <div class="col-md-4 col-xl-4">

                                <div class="card bg-primary p-3 order-card">
                                    <div class="card-block">
                                        <h5>Usuarios</h5>
                                        @php
                                        use App\Models\User;
                                        $cant_usuarios = User::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-users fa-left"></i><span
                                                class="mx-3">{{$cant_usuarios}}</span></h2>

                                        <p class="m-b-0 text-right">
                                            

                                            @can('ver-usuario')
                                            <a href="/usuarios" class="text-white">Ver Mas</a>
                                            @endcan
                                        </p>
                                    </div>
                                </div>

                            </div>

                            {{-- card Aprendiz  --}}

                            <div class="col-md-4 col-xl-4">

                                <div class="card bg-warning p-3 order-card">
                                    <div class="card-block">
                                        <h5>Aprendices</h5>
                                        @php
                                        use App\Models\Aprendiz;
                                        $cant_aprendiz = Aprendiz::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-users fa-left"></i><span
                                                class="mx-3">{{$cant_aprendiz}}</span></h2>

                                        <p class="m-b-0 text-right">
                                            

                                            @can('ver-aprendiz')
                                            <a href="/aprendiz" class="text-white">Ver Mas</a>
                                            @endcan
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- card Roles  --}}

                            <div class="col-md-4 col-xl-4">

                                <div class="card bg-success p-3 order-card">
                                    <div class="card-block">
                                        <h5>Roles</h5>
                                        @php
                                        use Spatie\Permission\Models\Role;
                                        $cant_roles = Role::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-users fa-left"></i><span
                                                class="mx-3">{{$cant_roles}}</span></h2>

                                        <p class="m-b-0 text-right">
                                            
                                            <p class="m-b-0 text-right">
                                            

                                                @can('ver-rol')
                                                <a href="/roles" class="text-white">Ver Mas</a>
                                                @endcan
                                            </p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
