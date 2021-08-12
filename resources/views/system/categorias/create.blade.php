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
                    <h3 class="panel-title">Alta Categorias</h3>
                    <p class="panel-subtitle">Listado de categorias</p>
                </div>
                <div class="panel-body">
                    <form action="{{route('categorias.store')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{old('nombre')}}" placeholder="Escriba el nombre....">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="estatus_id" class="col-md-6 col-form-label">Estatus</label>
                                <select class="form-control  @error('estatus_id') is-invalid @enderror" name="estatus_id" id="estatus_id">
                                    @foreach($estatus as $estatu)
                                    <option {{ old('estatu_id') == $estatu->id ? 'selected': ''}} value="{{$estatu->id}}">
                                        {{$estatu->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="descripcion">Descripcion</label>
                                <div class="form-group">
                                    <input type="hidden" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
                                    <trix-editor input="descripcion"></trix-editor>
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
<!-- END MAIN CONTENT -->
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
@endsection
