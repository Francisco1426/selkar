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
                                    <input type="text" class="form-control" id="clave" name="clave" value="{{$producto->clave}}" placeholder=" Escriba la clave">
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
                            <div class="col-md-4 my-3">
                                <label for="imagen">Elija una imagen</label>
                                <div class="form-group">
                                    <input type="file" class="form-control @error('imagen') is-invalid @enderror" name="imagen" id="file">
                                </div>
                                <div id="preview">
                                    @if( $producto->imagen )
                                    <img src="{{asset('/imagen/'.$producto->imagen)}} ">
                                    @endif
                                </div>
                                @error('imagen')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="categorias">Categoria</label>
                                <select class="form-control  @error('categorias_id') is-invalid @enderror" name="categorias_id" id="categorias_id">
                                    @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}" {{ $producto->categorias_id == $categoria->id ? 'selected' : '' }}>{{$categoria->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('categoria')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="estatus">Estatus</label>
                                <select class="form-control  @error('estatus') is-invalid @enderror" name="estatus_id" id="estatus_id">
                                    @foreach($estatus as $estatu)
                                    <option value="{{$estatu->id}}" {{$producto->estatus_id == $estatu->id ? 'selected' : '' }}>{{$estatu->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('estatus')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="stock" class="col-sm-1-12 col-form-label">Stock:</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="stock" name="stock" value="{{$producto->stock}}" placeholder="10">
                                </div>
                                @error('stock')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="presentacion" class="col-sm-1-12 col-form-label">Presentacion:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="presentacion" name="presentacion" value="{{$producto->presentacion}}" placeholder="Pza">
                                </div>
                                @error('presentacion')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="precio" class="col-sm-1-12 col-form-label">Precio inicial:</label>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('precioinicial') is-invalid @enderror" name="precioinicial" id="precioinicial" value="{{$producto->precioinicial}}" placeholder="Precio">
                                </div>
                                @error('precioinicial')
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
                            <div class="form-group col-md-12">
                                <label for="tipoproducto" class="col-sm-1-12 col-form-label">Tipo de producto</label>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipoproducto') is-invalid @enderror" type="radio" name="tipoproducto" id="tipoproducto" value="Producto comercial" {{ old('tipoproducto') == 'Producto comercial' ? 'checked': ( $producto->tipoproducto == 'Producto comercial' ? 'checked' : '' ) }}>
                                        Producto comercial
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipoproducto') is-invalid @enderror" type="radio" name="tipoproducto" id="tipoproducto" value="otro" {{ old('tipoproducto') == 'otro' ? 'checked': ( $producto->tipoproducto == 'otro' ? 'checked' : '' ) }}>
                                        Otro
                                    </label>
                                </div>
                                @error('tipoproducto')
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
        document.getElementById("file").onchange = function(e) {
            // Creamos el objeto de la clase FileReader
            let reader = new FileReader();

            // Leemos el archivo subido y se lo pasamos a nuestro fileReader
            reader.readAsDataURL(e.target.files[0]);

            // Le decimos que cuando este listo ejecute el código interno
            reader.onload = function() {
                let preview = document.getElementById('preview'),
                    image = document.createElement('img');

                image.src = reader.result;

                preview.innerHTML = '';
                preview.append(image);
            };
        }
    });
</script>
@endsection
