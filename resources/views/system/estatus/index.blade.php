@extends('principal')
@section('contenido')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Estatus</h3>
                    <p class="panel-subtitle">Listado de estatus</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('estatus.create')}}" class="btn btn-primary">Crear Estatus</a>
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
                    @foreach($estatus as $estatu)
                    <tr>
                        <td>{{$estatu->id}}</td>
                        <td>{{$estatu->nombre}}</td>
                        <td>{{$estatu->descripcion}}</td>
                        <td>
                            <a href="{{route('estatus.edit', $estatu->id)}}" class="btn btn-warning">Modificar</a>
                            
                    </tr>
                    
                @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
