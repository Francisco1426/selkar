@extends('principal')


@section('contenido')

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Alta Productos</h3>
                    <p class="panel-subtitle">Llena todos los campos</p>
                </div>
                <div class="panel-body">
                    
                    <form action="{{route('productos.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        id="nombre" value="" placeholder="Escriba el nombre....">
                                </div>
            
                            </div>
                            <div class="col-md-4">
                                <label for="app" class="col-sm-1-12 col-form-label">Descripcion:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion"
                                        value="" placeholder="Escriba la descripcion....">
                                </div>
            
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="col-sm-1-12 col-form-label">Imagen</label>
                                <div class="form-group">
                                    <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen"
                                        id="imagen" value="" placeholder="Escribe la imagen ">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Unidad de medida:</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Estatus:</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="app" class="col-sm-1-12 col-form-label">Clave:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control name="" id=""
                                        value="" placeholder="Escriba la clave....">
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