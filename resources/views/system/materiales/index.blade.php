@extends('principal')
@section('contenido')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte insumos</h3>
                    <p class="panel-subtitle">Listado de insumos</p>
                </div>
                <div class="panel-body">
                    <a href="{{ route('materiales.create') }}" class="btn btn-primary">Crear insumo</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-inverse mt-3 responsive" id="clientes">
                <thead class="thead-inverse">
                    <tr>
                        <th>Clave</th>
                        <th>Material</th>
                        <th>Tipo de material</th>
                        <th>Operaciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($materiales as $material)
                    <tr>
                        <td>{{$material->id}}</td>
                        <td>{{$material->nombre}}</td>
                        <td>{{$material->tipomaterial}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
