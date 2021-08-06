@extends('principal')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css
">
@endsection
@section('contenido')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Actualizar cliente</h3>
                    <p class="panel-subtitle">Gestion de clientes</p>
                </div>
                <div class="panel-body">
                    <form action="{{ route('clientes.update',['cliente' => $cliente->id]) }}" method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Razon social</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('razonsocial') is-invalid @enderror" name="razonsocial" id="razonsocial" value="{{ old('razonsocial')?? $cliente->razonsocial}}" placeholder="Ingrese el nombre de la empresa">
                                    @error('razonsocial')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="telefono" class="col-sm-1-12 col-form-label">Numero de telefono(Empresa)</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" value="{{ old('telefono') ?? $cliente->telefono}}" placeholder="Numero de telefono">
                                    @error('telefono')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="col-sm-1-12 col-form-label">Email</label>
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') ?? $cliente->email}}" placeholder="Escriba el email">
                                    @error('email')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="representante" class="col-sm-1-12 col-form-label">Nombre representante completo</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('representante') is-invalid @enderror" name="representante" id="representante" value="{{ old('representante') ?? $cliente->representante}}" placeholder="Omar Chong Lopez">
                                    @error('representante')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="telefono" class="col-sm-1-12 col-form-label">Celular particular</label>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('celular') is-invalid @enderror" name="celular" id="celular" value="{{ old('celular') ?? $cliente->celular}}" placeholder="Digite el numero">
                                    @error('celular')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="estatus_id" class="col-md-6 col-form-label">Estatus</label>
                                <select class="form-control  @error('estatus_id') is-invalid @enderror" name="estatus_id" id="estatus_id">
                                    @foreach($estatus as $estatu)
                                    <option value="{{$estatu->id}}" {{$cliente->estatus_id == $estatu->id ? 'selected' : ''}}>{{$estatu->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('estatu_id')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="direccion">Direccion</label>
                                <div class="form-group">
                                    <input type="hidden" name="direccion" id="direccion" value="{{$cliente->direccion}}">
                                    <trix-editor input="direccion"></trix-editor>
                                </div>
                                @error('direccion')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipocliente" class="col-sm-1-12 col-form-label">Tipo de cliente</label>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipocliente') is-invalid @enderror" type="radio" name="tipocliente" id="tipocliente" value="Empresa" {{ old('tipocliente') === 'Empresa' ? 'checked' : ($cliente->tipocliente == 'Empresa'? 'checked' : '' ) }}>
                                        Empresa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipocliente') is-invalid @enderror" type="radio" name="tipocliente" id="tipocliente" value="Particular" {{ old('tipocliente') === 'Particular' ? 'checked' : ($cliente->tipocliente == 'Particular'? 'checked' : '' ) }}>
                                        Particular
                                    </label>
                                </div>
                                @error('tipocliente')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="estatuscliente" class="col-sm-1-12 col-form-label">Estatus del cliente</label>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('estatuscliente') is-invalid @enderror" type="radio" name="estatuscliente" id="estatuscliente" value="Prospecto" {{old('estatuscliente') === 'Prospecto' ? 'checked' :($cliente ->estatuscliente == 'Prospecto' ? 'checked': '')}}>
                                        Prospecto
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('estatuscliente') is-invalid @enderror" type="radio" name="estatuscliente" id="estatuscliente" value="Cliente" {{old('estatuscliente') === 'Cliente' ? 'checked' :($cliente ->estatuscliente == 'Cliente' ? 'checked': '')}}>
                                        Cliente
                                    </label>
                                </div>
                                @error('estatuscliente')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                        </div>
                        <div class="container col-md-12">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
@endsection
