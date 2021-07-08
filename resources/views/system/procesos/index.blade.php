@extends('principal')
@section('contenido')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Procesos</h3>
                    <p class="panel-subtitle">Listado de productos</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('procesos.create')}}" class="btn btn-primary">Crear Proceso</a>
                </div>
            </div>
            <table class="table table-striped table-inverse mt-3 responsive" id="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($procesos as $proceso)
                        <tr>
                            <td>{{$proceso -> id}}</td>
                            <td>{{$proceso -> nombre}}</td>
                            <td>{{$proceso -> descripcion}}</td>
                            <td>
                                <a href="{{route('procesos.edit', $procesos)}}" class="btn btn-warning">Modificar</a>
                                
                        </tr>
                        
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
