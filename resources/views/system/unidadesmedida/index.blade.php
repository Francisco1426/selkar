@extends('principal')
@section('contenido')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reporte tipos de unidades de medida</h3>
                        <p class="panel-subtitle">Unidades de medida disponibles</p>
                    </div>
                    <div class="panel-body">
                        <a href="{{ route('unidadesmedida.create') }}" class="btn btn-primary">Crear unidad de medida</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
