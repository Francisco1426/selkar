@extends('principal')
@section('contenido')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de materiales para produccion</h3>
                    <p class="panel-subtitle">Lista de materiales</p>
                </div>
                <div class="panel-body">
                    <form action="{{ route('materiales.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="" placeholder="Escriba el nombre....">
                                </div>

                            </div>
                            <div class="col-md-4">
                                <label for="medida" class="col-sm-1-12 col-form-label"> Unidad de Medida</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('app') is-invalid @enderror" name="medida" id="medida" value="" placeholder="Indique la medida....">
                                </div>

                            </div>


                            <div class="form-group col-md-6">
                                <label for="tipomaterial" class="col-sm-1-12 col-form-label">Tipo de material</label>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipomaterial') is-invalid @enderror" type="radio" name="tipomaterial" id="tipomaterial" value="Acabado" {{ old('tipomaterial') === 'Acabado' ? 'checked' : '' }}>
                                        Acabado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipocliente') is-invalid @enderror" type="radio" name="tipomaterial" id="tipomaterial" value="Estructural" {{ old('tipomaterial') === 'Estructural' ? 'checked' : '' }}>
                                        Estructural
                                    </label>
                                </div>
                                @error('tipomaterial')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror

                            </div>
                            <div class="col-md-4">
                                <label for="descripcion" class="col-sm-1-12 col-form-label">Descripcion</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="" placeholder="Descripcion.">
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
@endsection
