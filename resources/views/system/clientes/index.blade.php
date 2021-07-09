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
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Crear cliente</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-inverse mt-3 responsive" id="clientes">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Clave</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Tipo cliente</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente as $client)
                            <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->nombre}}</td>
                                <td>{{$client->telefono}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->tipocliente}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
