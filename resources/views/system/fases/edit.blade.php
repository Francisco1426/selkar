@extends('principal')
@section('contenido')
@section('css')
<<<<<<< HEAD
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css"> 
=======
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css
">
>>>>>>> main
@endsection
<div class="main">
    <div class="main-content">
        <div class="container-fluid">

            <div class="panel panel-headline">  
                <div class="panel-heading">
<<<<<<< HEAD
                    <h3 class="panel-title">Modifica Fases</h3>
                    <p class="panel-subtitle">Registro de fases</p>
=======
                    <h3 class="panel-title">Modificacion de Fases</h3>
                    <p class="panel-subtitle">Actualiza la fase {{$fase->nombre}}</p>
>>>>>>> main
                </div>
                <div class="panel-body">

                    <form action="{{route('fases.update', $fase)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre: </label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{$fase->nombre}}" placeholder="Escriba el nombre....">
                                </div>
                                @error('nombre')
                                <small class="text-danger">{{ $message}}</small>
                                @enderror
                            </div>
<<<<<<< HEAD

=======
>>>>>>> main
                            <div class="col-md-6">
                                <label for="estatus_id" class="col-md-6 col-form-label">Estatus</label>
                                <select class="form-control  @error('estatus_id') is-invalid @enderror" name="estatus_id" id="estatus_id">
                                    @foreach ($estatus as $estatu)
<<<<<<< HEAD
                                    <option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
                                    @endforeach                                    
                                </select>
                                @error('estatus_id')
                                    <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Descripcion</label>
                                <div class="form-group">
                                    <input type="hidden" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="{{$fase->descripcion}}" placeholder="Escriba el nombre....">
                                    <trix-editor input="descripcion"></trix-editor>
                                </div>
=======
                                    <option value="{{$estatu->id}}"{{$fase->estatus->id== $estatu->id ? 'selected': ''}}>{{$estatu->nombre}}</option>

                                    @endforeach
                                </select>
                                @error('estatus_id')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
>>>>>>> main
                            </div>
                            <div class="col-md-12">
                            <label for="nombre" class="col-sm-1-12 col-form-label">Descripcion</label>
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="{{$fase->descripcion}}" placeholder="Escriba el nombre....">
                                <trix-editor input="descripcion"></trix-editor>
                            </div>
                            @error('descripcion')
                            <small class="text-danger">{{ $message}}</small>
                            @enderror
                        </div>
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
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
@endsection
