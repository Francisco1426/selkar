@extends('principal')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section('contenido')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Cotizaciones</h3>
                    <p class="panel-subtitle">Listado de cotizaciones</p>
                </div>
                <div class="panel-body">
                    <a href="{{ route('cotizaciones.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Crear Cotizacion</a>
                </div>
            </div>
        </div>
        <div class="container">
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Clave</th>
                        <th>Titulo</th>
                        <th>Vendedor</th>
                        <th>Cliente</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($cotizaciones as $cotizacion)
                            <tr>
                                <td>{{ $cotizacion->id }}</td>
                                <td>{{ $cotizacion->clave }}</td>
                                <td>{{ $cotizacion->titulo }}</td>
                                <td>{{ $cotizacion->vendedor }}</td>
                                <td>{{ $cotizacion->cliente->razonsocial }}</td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
