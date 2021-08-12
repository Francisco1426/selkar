@extends('principal')

@section('contenido')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Detalles de productos</h3>
                </div>
                <div class="panel-body">
                    <div class="form-row">
                    <div class="col-md-4">
                        <label for="">Imagen</label>
                        <img src="{{asset('/imagen/'.$productos->imagen)}}" class="img-thumbnail">
                    </div>
                        <div class="col-md-4">
                            <label for="clave" class="col-sm-1-12 col-form-label">Clave:</label>
                            {{$productos->clave}}
                        </div>
                        <div class="col-md-4">
                            <label for="nombre">Producto:</label>
                            <input class="form-control" type="text" value="{{$productos->nombre}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="">Categoria:</label>
                            {{$productos->categorias->nombre}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Estatus</label>
                            <input class="form-control" type="text" value="{{$productos->estatus->nombre}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="">Stock</label>
                            <input class="form-control" type="text" value="{{$productos->stock}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="">Presentacion</label>
                            <input class="form-control" type="text" value="{{$productos->presentacion}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="">Dimension</label>
                            <input class="form-control" type="text" value="{{$productos->dimension}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="">Precio distribuidor</label>
                            <input class="form-control" type="text" value="{{$productos->preciodistribuidor}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="">Precio contado</label>
                            <input class="form-control" type="text" value="{{$productos->preciocontado}}" readonly>

                        </div>
                        <div class="col-md-4">
                            <label for="">Precio publico</label>
                            <input class="form-control" type="text" value="{{$productos->preciopublico}}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="">Descripcion</label>
                            {!!$productos->descripcion!!}
                        </div>
                        <div class="col-md-4">
                            <label for="">Tipo de producto</label>
                            <input class="form-control" type="text" value="{{$productos->tipoproducto}}" readonly>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
