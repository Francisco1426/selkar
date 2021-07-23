@extends('principal')
@section('contenido')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"> 
@endsection
<div class="main">
    <div class="main-content">
        <div class="container-fluid">

            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Alta Fases</h3>
                    <p class="panel-subtitle">Registro de fases</p>
                </div>
                <div class="panel-body">

                    <form action="{{route('fases.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre: </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="" placeholder="Escriba el nombre....">
                                </div>

                                @error('nombre')
                                <small class="text-danger">{{ $message}}</small>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="estatus_id" class="col-md-6 col-form-label">Estatus</label>
                                <select class="form-control  @error('estatus_id') is-invalid @enderror" name="estatus_id" id="estatus_id">
                                    @foreach ($estatus as $estatu)
                                    <option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
                                    @endforeach                                    
                                </select>
                                @error('estatus_id')
                                    <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
        
                        </div>
                        <div class="col-md-12">
                            <label for="nombre" class="col-sm-1-12 col-form-label">Descripcion</label>
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="" placeholder="Escriba el nombre....">
                                <trix-editor input="descripcion"></trix-editor>
                            </div>

                            @error('descripcion')
                            <small class="text-danger">{{ $message}}</small>
                            @enderror
                        </div>

                        <div class="col-md-11">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Guardar</button>
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
