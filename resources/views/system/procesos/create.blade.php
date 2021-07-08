@extends('principal')
@section('contenido')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reporte Procesos</h3>
                        <p class="panel-subtitle">Listado de productos</p>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('procesos.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-4">
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                            name="nombre" id="nombre" value="" placeholder="Escriba el nombre....">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <label for="app" class="col-sm-1-12 col-form-label">Descripcion</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('descripcion') is-invalid @enderror"
                                            name="descripcion" id="descripcion" value="" placeholder="Escriba la descripcion....">
                                    </div>

                                </div>
                                
                                <div class="col-md-4">
                                    <label for="estatus" class="col-md-6 col-form-label">Estatus</label>
                                    <select class="form-control  @error('status_id') is-invalid @enderror" name="status_id"
                                        id="status_id">
                                        <option value="">Seleciona uno</option>

                                        </option>
                                    </select>
                                    @error('statu_id')
                                        <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                               
                            </div>
                            

                            <button type="submit" class="btn btn-success">Guardar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
