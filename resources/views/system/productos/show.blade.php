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
                            {{$productos->nombre}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Categoria:</label>
                            {{$productos->categorias->nombre}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Estatus</label>
                            {{$productos->estatus->nombre}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Stock</label>
                            {{$productos->stock}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Presentacion</label>
                            {{$productos->presentacion}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Dimension</label>
                            {{$productos->dimension}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Precio distribuidor</label>
                            {{$productos->preciodistribuidor}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Precio contado</label>
                            {{$productos->preciocontado}}

                        </div>
                        <div class="col-md-4">
                            <label for="">Precio publico</label>
                            {{$productos->preciopublico}}
                        </div>
                        <div class="col-md-4">
                            <label for="">Descripcion</label>
                            {!!$productos->descripcion!!}
                        </div>
                        <div class="col-md-4">
                            <label for="">Tipo de producto</label>
                            {{$productos->tipoproducto}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
