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
                    <h3 class="panel-title">Modificacion de productos</h3>
                    <p class="panel-subtitle"></p>
                </div>
                <div class="panel-body">

                    <form action="{{route('productos.update',['producto' => $producto->id])}}" method="post" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="app" class="col-sm-1-12 col-form-label">Clave:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="clave" name="clave" value="{{old('clave')}}" placeholder=" Escriba la clave">
                                </div>
                                @error('clave')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre(Producto):</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{$producto->nombre}}" placeholder="Escriba el nombre">
                                </div>
                                @error('nombre')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="precio" class="col-sm-1-12 col-form-label">Precio:</label>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('precio') is-invalid @enderror" name="precio" id="precio" value="{{$producto->precio}}" placeholder="Precio">
                                </div>
                                @error('precio')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4 my-3">
                                <label for="imagen">Elija una imagen</label>
                                <div class="form-group">
                                <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" id="imagen">
                                </div>
                                @error('imagen')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="categorias">Categoria</label>
                                <select class="form-control  @error('estatus_id') is-invalid @enderror" name="categorias_id" id="categorias_id">
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('categoria')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="estatus">Estatus</label>
                                <select class="form-control  @error('estatus') is-invalid @enderror" name="estatus_id" id="estatus_id">
                                    <option>--Seleccione uno--</option>
                                    @foreach($estatus as $estatu)
                                    <option value="{{$estatu->id}}">{{$estatu->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('estatus')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="descripcion">Descripcion</label>
                                <div class="form-group">
                                    <input type="hidden" name="descripcion" id="descripcion" value="{{$producto->descripcion}}">
                                    <trix-editor input="descripcion"></trix-editor>
                                </div>
                                @error('descripcion')
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
<!-- END MAIN CONTENT -->
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(e) {
        $('#imagen').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@endsection
