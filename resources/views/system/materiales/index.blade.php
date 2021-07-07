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
    </div>
@endsection
