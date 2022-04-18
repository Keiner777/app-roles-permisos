<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">

    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>

    
    @can('ver-usuario')
    <a class="nav-link " href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    @endcan
    
    @can('ver-rol')
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    @endcan
    
    

    @can('ver-aprendiz')
    <a class="nav-link " href="/aprendiz">
        <i class=" fas fa-graduation-cap "></i><span>Aprendiz</span>
    </a>
    @endcan


    @can('ver-instructor')
    <a class="nav-link " href="/instructor">
        <i class=" fas fa-user-astronaut "></i><span>Instructor</span>
    </a>
    @endcan

    @can('ver-ficha')
    <a class="nav-link " href="/ficha">
        <i class=" fas fa-user-check "></i><span>Fichas</span>
    </a>
    @endcan
    
    


</li>
