@extends('principal')

@section('contenido')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Vista de materiales</h3>
                    <p class="panel-subtitle">Aqui podras ver los datos</p>
                </div>
                <div class="panel-body">
                   Nombre: {{$material->nombre}}
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection