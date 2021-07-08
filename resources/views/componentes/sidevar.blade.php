<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{route('Inicio')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="{{route('productos.index')}}" class=""><i class="lnr lnr-car"></i> <span>Productos</span></a></li>
                <li><a href="{{route('clientes.index')}}" class=""><i class="lnr lnr-user"></i> <span>Clientes</span></a></li>
                <li><a href="{{route('materiales.index')}}" class=""><i class="lnr lnr-user"></i> <span>Materiales</span></a></li>
                <li><a href="{{route('fases.index')}}" class=""><i class="lnr lnr-rocket"></i> <span>Fases</span></a></li>
                <li><a href="{{route('estatus.index')}}" class=""><i class="lnr lnr-rocket"></i> <span>Estaus</span></a></li>

                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i>
                        <span>Produccion</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Lista de materiales</a></li>
                            <li><a href="page-login.html" class="">Materilaes</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i>
                        <span>Usuarios</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Roles</a></li>
                            <li><a href="page-login.html" class="">Permisos</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
