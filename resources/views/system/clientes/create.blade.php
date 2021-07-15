@extends('principal')
@section('contenido')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Alta de Clientes</h3>
                    <p class="panel-subtitle">Registro de clientes</p>
                </div>
                <div class="panel-body">
                    <form class="guardar" action="{{ route('clientes.store') }}" method="post" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Razon social</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('razonsocial') is-invalid @enderror" name="razonsocial" id="razonsocial" value="{{ old('razonsocial')}}" placeholder="Ingrese el nombre de la empresa">
                                    @error('razonsocial')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="rfc" class="col-sm-1-12 col-form-label">Rfc</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('rfc') is-invalid @enderror" name="rfc" id="rfc" value="{{ old('rfc')}}" placeholder="Ingrese el rfc">
                                    @error('rfc')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-4">
                                <label for="telefono" class="col-sm-1-12 col-form-label">Numero de telefono(Empresa)</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" id="telefono" value="{{ old('telefono')}}" placeholder="Numero de telefono">
                                    @error('telefono')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-4">
                                <label for="email" class="col-sm-1-12 col-form-label">Email</label>
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email')}}" placeholder="Escriba el email">
                                    @error('email')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="direccion" class="col-sm-1-12 col-form-label">Direccion</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" id="direccion" value="{{ old('direccion')}}" placeholder="Calle benito juarez">
                                    @error('direccion')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="colonia" class="col-sm-1-12 col-form-label">Colonia</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" id="colonia" value="{{ old('colonia')}}" placeholder="Col Isidro fabela">
                                    @error('colonia')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="municipio" class="col-sm-1-12 col-form-label">Municipio</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('municipio') is-invalid @enderror" name="municipio" id="municipio" value="{{ old('municipio')}}" placeholder="Calle benito juarez">
                                    @error('municipio')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="cp" class="col-sm-1-12 col-form-label">Codigo postal</label>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('cp') is-invalid @enderror" name="cp" id="cp" value="{{ old('cp')}}" placeholder="52743">
                                    @error('cp')
                                    <small class="text-danger">El  Codigo postal es requerido </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="representante" class="col-sm-1-12 col-form-label">Nombre representante completo</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('representante') is-invalid @enderror" name="representante" id="representante" value="{{ old('representante')}}" placeholder="Omar Chong Lopez">
                                    @error('representante')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="telefono" class="col-sm-1-12 col-form-label">Celular particular</label>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('celular') is-invalid @enderror" name="celular" id="celular" value="{{ old('celular')}}" placeholder="Digite el numero">
                                    @error('celular')
                                    <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="estatus_id" class="col-md-6 col-form-label">Estatus</label>
                                <select class="form-control  @error('estatus_id') is-invalid @enderror" name="estatus_id" id="estatus_id">
                                    @foreach($estatus as $estatu)
                                    <option {{ old('estatu_id') == $estatu->id ? 'selected': ''}} value="{{$estatu->id}}">
                                        {{$estatu->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('estatu_id')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipocliente" class="col-sm-1-12 col-form-label">Tipo de cliente</label>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipocliente') is-invalid @enderror" type="radio" name="tipocliente" id="tipocliente" value="Empresa" {{ old('tipocliente') === 'empresa' ? 'checked' : '' }}>
                                        Empresa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipocliente') is-invalid @enderror" type="radio" name="tipocliente" id="tipocliente" value="Particular" {{ old('tipocliente') === 'particular' ? 'checked' : '' }}>
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

