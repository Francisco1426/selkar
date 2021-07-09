@extends('principal')
@section('contenido')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reporte tipos de materiales</h3>
                        <p class="panel-subtitle">Tipos de materiales</p>
                    </div>
                    <div class="panel-body">
                        <a href="{{ route('tipomateriales.create') }}" class="btn btn-primary">Crear Tipo de material</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
