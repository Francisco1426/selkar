@extends('principal')
@section('contenido')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reporte fases</h3>
                        <p class="panel-subtitle">Listado de fases</p>
                    </div>
                    <div class="panel-body">
                        <a href="{{ route('fases.create') }}" class="btn btn-primary">Crear fase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
