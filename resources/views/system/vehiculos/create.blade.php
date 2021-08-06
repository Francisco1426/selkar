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
                    <h3 class="panel-title">Registro de Vehiculos</h3>
                    <p class="panel-subtitle">Llena todos los campos</p>
                </div>
                <div class="panel-body">
                    <form action="{{ route('vehiculos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="" placeholder="Escriba el nombre....">
                                </div>
                            
                                @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="medida" class="col-sm-1-12 col-form-label">Marca</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('marca') is-invalid @enderror" name="marca" id="marca" value="" placeholder="Escribe la marca">
                                </div>

                                @error('marca')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="col-md-6">
                                <label for="modelo" class="col-sm-1-12 col-form-label">Numero Serie</label>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('numeroserie') is-invalid @enderror" name="numeroserie" id="numeroserie" value="" placeholder="Escribe el modelo">
                                </div>

                                @error('numeroserie')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="modelo" class="col-sm-1-12 col-form-label">Fecha</label>
                                <div class="form-group">
                                    <input type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" id="fecha" value="" placeholder="Escribe el modelo">
                                </div>

                                @error('fecha')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            

                            <div class="col-md-6">
                                <label for="estatus_id" class="col-md-6 col-form-label">Cliente</label>
                                <select class="form-control  @error('clientes_id') is-invalid @enderror" name="clientes_id" id="clientes_id">
                                    @foreach ($clientes as $cliente)
                                    <option value="{{$cliente->id}}">{{$cliente->representante}}</option>
                                    @endforeach                                    
                                </select>
                                @error('estatus_id')
                                    <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="estatus_id" class="col-md-6 col-form-label">Producto</label>
                                <select class="form-control  @error('cliente_id') is-invalid @enderror" name="producto_id" id="producto_id">
                                    @foreach ($productos as $producto)
                                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                    @endforeach                                    
                                </select>
                                @error('estatus_id')
                                    <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            </div>
                            <div class="col-md-12">
                                <label for="descripcion" class="col-sm-1-12 col-form-label">Observacion del Vehiculo</label>
                                <div class="form-group">
                                    <input type="hidden" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="{{old('descripcion')}}" placeholder="Descripcion">
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