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
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped table-inverse mt-3 responsive" id="clientes">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Clave</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Operaciones</th>
    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fases as $fase)
                                    <tr>
                                        <th scope="row">{{$fase->id}}</th>
                                        <td scope="col">{{$fase->nombre}}</td>
                                        <td scope="col">{{$fase->descripcion}}</td>
                                        <td>
                                            <a href="{{route('fases.edit',$fase->id)}}" class="btn btn-success lnr lnr-pencil"></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection