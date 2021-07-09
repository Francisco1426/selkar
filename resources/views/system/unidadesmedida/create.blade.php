@extends('principal')

@section('contenido')

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
<<<<<<< HEAD:resources/views/system/unidadesmedida/create.blade.php
                    <h3 class="panel-title">Alta Unidades Medida</h3>
                    <p class="panel-subtitle">Llena todos los campos</p>
                </div>
                <div class="panel-body">
                    
                    <form action="{{route('unidadesmedida.store')}}" method="POST">
=======
                    <h3 class="panel-title">Modifica Procesos</h3>
                    <p class="panel-subtitle">Listado de procesos</p>
                </div>
                <div class="panel-body">
                    
                    <form action="{{route('procesos.update', $proceso)}}" method="POST">
>>>>>>> Eduardo:resources/views/system/procesos/edit.blade.php
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        id="nombre" value="{{$proceso->nombre}}" placeholder="Escriba el nombre....">
                                </div>
            
                            </div>
                            <div class="col-md-4">
                                <label for="app" class="col-sm-1-12 col-form-label">Abreviatura/Sigla:</label>
                                <div class="form-group">
<<<<<<< HEAD:resources/views/system/unidadesmedida/create.blade.php
                                    <input type="text" class="form-control @error('abreviatura') is-invalid @enderror" name="abreviatura" id="abreviatura"
                                        value="" placeholder="Escriba la abreviatura....">
=======
                                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion"
                                        value="{{$proceso->descripcion}}" placeholder="Escriba la descripcion....">
>>>>>>> Eduardo:resources/views/system/procesos/edit.blade.php
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