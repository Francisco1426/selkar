@extends('principal')


@section('contenido')

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Modifica Estatus</h3>
                    <p class="panel-subtitle">Listado de estatus</p>
                </div>
                <div class="panel-body">
                    
                    <form action="{{route('estatus.update', $estatu->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        id="nombre" value="{{$estatu->nombre}}" placeholder="Escriba el nombre....">
                                </div>
            
                            </div>
                            <div class="col-md-4">
                                <label for="app" class="col-sm-1-12 col-form-label">Descripcion:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion"
                                        value="{{$estatu->descripcion}}" placeholder="Escriba la descripcion....">
                                </div>
            
                            </div>
                        </div>
            
                        <button type="submit" class="btn btn-success">Guardar</button>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
    
@endsection