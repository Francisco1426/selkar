@extends('principal')

@section('contenido')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte materiales</h3>
                    <p class="panel-subtitle">Llena todos los campos</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('materiales.create')}}" class="btn btn-primary">Nuevo Material</a>
                    <br><br>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Clave</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Operaciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection