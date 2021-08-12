@extends('principal')
@section('contenido')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
@endsection
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alta Estatus</h3>
                        <p class="panel-subtitle">Llena todos los campos</p>
                    </div>
                    <div class="panel-body">
                    

            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Alta de Clientes</h3>
                    <p class="panel-subtitle">Registro de clientes</p>
                </div>
                <div class="panel-body">

                    <form action="{{ route('estatus.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Estatus</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="Escriba el nombre....">
                                </div>
                                @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Descripcion</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="{{old('descripcion')}}" placeholder="Escriba el nombre....">
                                    <trix-editor input="descripcion"></trix-editor>
                                </div>
                                @error('descripcion')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            
                            <div class="col-md-11">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
@endsection
@endsection
