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
                    <h3 class="panel-title">Alta Productos</h3>
                    <p class="panel-subtitle">Llena todos los campos</p>
                </div>
                <div class="panel-body">

                    <form action="{{route('productos.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">

                            <div class="col-md-4">
                                <label for="app" class="col-sm-1-12 col-form-label">Clave de producto/servicio:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="clave" name="clave"
                                        value="{{old('clave')}}" readonly placeholder="se genera automaticamente">
                                </div>
                                @error('clave')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre(Producto):</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                        name="nombre" id="nombre" value="{{old('nombre')}}"
                                        placeholder="Escriba el nombre">
                                </div>
                                @error('nombre')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipoproducto" class="col-sm-1-12 col-form-label">Tipo de producto</label>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipoproducto') is-invalid @enderror"
                                            type="radio" name="tipoproducto" id="tipoproducto"
                                            value="Producto comercial"
                                            {{ old('tipoproducto') === 'Producto comercial' ? 'checked' : '' }}>
                                        Producto comercial
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipoproducto') is-invalid @enderror"
                                            type="radio" name="tipoproducto" id="tipoproducto"
                                            value="Producto fabricacion"
                                            {{ old('tipoproducto') === 'Producto fabricacion' ? 'checked' : '' }}>
                                        Producto fabricacion
                                    </label>
                                </div>
                                @error('tipoproducto')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="categorias">Categoria</label>
                                <select class="form-control form-group  @error('estatus_id') is-invalid @enderror"
                                    name="categorias_id" id="categorias_id">
                                    @foreach($categorias as $categoria)
                                    <option {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}
                                        value="{{ $categoria->id }}">
                                        {{$categoria->nombre}}
                                        @endforeach
                                </select>
                                @error('categoria')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="estatus">Estatus</label>
                                <select class="form-control form-group  @error('estatus') is-invalid @enderror"
                                    name="estatus_id" id="estatus_id">
                                    @foreach($estatus as $estatu)
                                    <option {{old('estatu_id') == $estatu->id ? 'selected' : ''}}
                                        value="{{$estatu->id}}">
                                        {{$estatu->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('estatus')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="stock" class="col-sm-1-12 col-form-label">Stock:</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="stock" name="stock"
                                        value="{{old('stock')}}" placeholder="10">
                                </div>
                                @error('stock')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="presentacion" class="col-sm-1-12 col-form-label">Presentacion:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="presentacion" name="presentacion"
                                        value="{{old('presentacion')}}" placeholder="Pza">
                                </div>
                                @error('presentacion')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="dimension" class="col-sm-1-12 col-form-label">Dimension:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="dimension" name="dimension"
                                        value="{{old('dimension')}}" placeholder="2.3 M">
                                </div>
                                @error('dimension')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="preciodistribuidor" class="col-sm-1-12 col-form-label">Precio
                                    distribuidor:</label>
                                <div class="form-group">
                                    <input type="number"
                                        class="form-control @error('preciodistribuidor') is-invalid @enderror"
                                        name="preciodistribuidor" id="preciodistribuidor"
                                        value="{{old('preciodistribuidor')}}" placeholder="Precio">
                                </div>
                                @error('preciodistribuidor')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="preciocontado" class="col-sm-1-12 col-form-label">Precio contado:</label>
                                <div class="form-group">
                                    <input type="number"
                                        class="form-control @error('preciocontado') is-invalid @enderror"
                                        name="preciocontado" id="preciocontado" value="{{old('preciocontado')}}"
                                        placeholder="Precio">
                                </div>
                                @error('preciocontado')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="preciopublico" class="col-sm-1-12 col-form-label">Precio publico:</label>
                                <div class="form-group">
                                    <input type="number"
                                        class="form-control @error('preciopublico') is-invalid @enderror"
                                        name="preciopublico" id="preciopublico" value="{{old('preciopublico')}}"
                                        placeholder="Precio">
                                </div>
                                @error('preciopublico')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="descripcion">Descripcion</label>
                                <div class="form-group">
                                    <input type="hidden" name="descripcion" id="descripcion"
                                        value="{{old('descripcion')}}">
                                    <trix-editor input="descripcion"></trix-editor>
                                </div>
                                @error('descripcion')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <label for="imagen">Elija una imagen</label>
                                <div class="form-group">
                                    <input type="file" class="form-control @error('imagen') is-invalid @enderror"
                                        name="imagen" id="file">
                                </div>
                                <div id="preview"></div>
                                @error('imagen')
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

                image = document.createElement('img', {
                    width: '50px',
                    height: '50px'
                });

            image.src = reader.result;

            preview.innerHTML = '';
            preview.append(image);
        };
    }
});
</script>
@endsection
