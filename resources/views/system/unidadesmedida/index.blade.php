@extends('principal')

@section('contenido')
    
<div class="main" method="POST">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte de Unidades Medida</h3>
                    <p class="panel-subtitle">Listado de unidades medida</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('unidadesmedida.create')}}" class="btn btn-primary">Nueva Unidad de Medida</a>
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
                                <tbody>
                                   
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>gdgdgd</td>
                                        <td>fsfsfs</td>
                                        <td>
                                            <a href="" class="btn btn-warning">Modificar</a>

                                            <form action="" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->





@endsection