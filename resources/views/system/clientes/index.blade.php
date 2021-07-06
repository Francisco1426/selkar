@extends('principal')
@section('contenido')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Clientes</h3>
                    <p class="panel-subtitle">Listado de productos</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('clientes.create')}}" class="btn btn-primary">Crear cliente</a>
                </div>
            </div>
            <table class="table table-striped table-inverse mt-3 responsive" id="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Tipo cliente</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
