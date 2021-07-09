@extends('principal')
@section('contenido')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alta de  Clientes</h3>
                        <p class="panel-subtitle">Registro de clientes</p>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('clientes.store') }}" method="POST">
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
                                    <label for="app" class="col-sm-1-12 col-form-label">Apellido Paterno</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('app') is-invalid @enderror"
                                            name="app" id="app" value="" placeholder="Escriba el apellido....">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <label for="apm" class="col-sm-1-12 col-form-label">Apellido Materno</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('apm') is-invalid @enderror"
                                            name="apm" id="apm" value="" placeholder="Escriba el apellido materno....">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <label for="telefono" class="col-sm-1-12 col-form-label">Telefono</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control @error('telefono') is-invalid @enderror"
                                            name="telefono" id="telefono" value="" placeholder="Digite el numero">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="col-sm-1-12 col-form-label">Email</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" value="" placeholder="Escriba el email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="rfc" class="col-sm-1-12 col-form-label">Razon social</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('rfc') is-invalid @enderror"
                                            name="rfc" id="rfc" value="" placeholder="Digite el numero">
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
                                <div class="form-group col-md-6">
                                    <label for="tipocliente" class="col-sm-1-12 col-form-label">Tipo de cliente</label>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDisabled">
                                            <input class="form-check-input @error('tipocliente') is-invalid @enderror"
                                                type="radio" name="tipocliente" id="tipocliente" value="Empresa"
                                                {{ old('tipocliente') === 'empresa' ? 'checked' : '' }}>
                                            Empresa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDisabled">
                                            <input class="form-check-input @error('tipocliente') is-invalid @enderror"
                                                type="radio" name="tipocliente" id="tipocliente" value="Particular"
                                                {{ old('tipocliente') === 'particular' ? 'checked' : '' }}>
                                            Particular
                                        </label>
                                    </div>
                                    @error('tipocliente')
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
