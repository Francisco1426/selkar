@extends('principal')

@section('contenido')


<div class="main" method="POST">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Productos</h3>
                    <p class="panel-subtitle">Listado de productos</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('productos.create')}}" class="btn btn-primary">Nuevo Producto</a>
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
                                   @foreach($productos as $producto)
                                    <tr>
                                        <th scope="row">{{$producto->id}}</th>
                                        <td>{{$producto->nombre}}</td>
                                        <td>{{$producto->descripcion}}</td>
                                        <td>
                                            <a href="{{route('productos.edit', $producto)}}" class="btn btn-warning">Modificar</a>

                                            <form action="{{route('productos.destroy', $producto)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
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
    </div>
</div>
<!-- END MAIN CONTENT -->
    
@endsection