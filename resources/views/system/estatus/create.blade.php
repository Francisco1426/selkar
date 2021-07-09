@extends('principal')
@section('contenido')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">

            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Alta de Clientes</h3>
                    <p class="panel-subtitle">Registro de clientes</p>
                </div>
                <div class="panel-body">

                    <form action="{{ route('estatus.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Estatus</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="" placeholder="Escriba el nombre....">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Descripcion</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="" placeholder="Escriba el nombre....">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
