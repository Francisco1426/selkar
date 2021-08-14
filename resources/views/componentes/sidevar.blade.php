<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{route('Inicio')}}" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @php
                    $rol=auth()->user()->rol;
                @endphp
                @if ($rol=="Admin")
                    <li><a href="{{route('usuarios.index')}}" class=""><i class="lnr lnr-user"></i> <span>Usuarios</span></a></li>
                @endif

                @if ($rol=="Admin"|| $rol=="Ventas")
                    <li><a href="{{route('clientes.index')}}" class=""><i class="lnr lnr-user"></i> <span>Clientes</span></a></li>
                @endif

                @if ($rol=="Admin"||($rol=="Produccion"||$rol=="Logistica"))
                    <li><a href="{{route('materiales.index')}}" class=""><i class="fas fa-tools"></i> <span>Materiales</span></a></li>
                    <li><a href="{{route('productos.index')}}" class=""><i class="fas fa-truck"></i> <span>Productos</span></a></li>
                    <li><a href="{{route('fases.index')}}" class=""><i class="lnr lnr-rocket"></i> <span>Fases</span></a></li>
                    <li><a href="{{route('estatus.index')}}" class=""><i class="fas fa-info-circle"></i> <span>Estatus</span></a></li>
                @endif
                @if ($rol=="Admin")
                @endif
                <li><a href="{{route('categorias.index')}}" class=""><i class="fas fa-dolly"></i> <span>Categorias</span></a></li>
                <li><a href="{{route('procesos.index')}}" class=""><i class="fas fa-info-circle"></i> <span>Procesos</span></a></li>
                <li><a href="{{route('vehiculos.index')}}" class=""><i class="fas fa-truck-moving"></i> <span>Vehiculos</span></a></li>
                <li><a href="{{route('Modulomateriales.index')}}" class=""><i class="fas fa-ad"></i> <span>Modulo de materiales</span></a></li>
            </ul>
        </nav>
    </div>
</div>
