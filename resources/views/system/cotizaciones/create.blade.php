@extends('principal')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css
">
<script src="https://cdnjs.cloudflare.com/ajax/libs/uuid/8.3.2/uuid.min.js" integrity="sha512-UNM1njAgOFUa74Z0bADwAq8gbTcqZC8Ej4xPSzpnh0l6KMevwvkBvbldF9uR++qKeJ+MOZHRjV1HZjoRvjDfNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('contenido')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Alta de cotizaciones</h3>
                    <p class="panel-subtitle">Registro de cotizaciones</p>
                </div>
                <div class="panel-body">
                    <form class="guardar" action="{{ route('cotizaciones.store') }}" method="post" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Clave de cotizacion</label>
                                <div class="form-group">
                                    <input type="text" name="clave" class="form-control" placeholder="221811717">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Vendedor</label>
                                <div class="form-group">
                                    <input type="text" name="vendedor" class="form-control" placeholder="Lic Nestor">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Titulo de cotizacion</label>
                                <div class="form-group">
                                    <input type="text" name="titulo" class="form-control" placeholder="Cotizacion de carrocerias">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="estatus" class="col-sm-1-12 col-form-label">Buscar cliente</label>
                                <div class="input-group">
                                    <input class="form-control mr-sm-2" type="search" name="razonsocial" id="buscar_cliente" placeholder="Ejm: Omar" aria-label="Search">
                                    <span class="input-group-btn">
                                        <button type="button" id="btn-seleccionar-cliente" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Clave</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cliente_id" id="cliente_id" value="{{old('cliente_id')}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Razon social</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="razonsocial" id="razonsocial" value="{{old('razonsocial')}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Representante</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="representante" name="representante" value="{{old('representante')}}"readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Email</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" readonly>
                                </div>
                            </div>
                            <h2 class="col-md-12 text-center">Detalles de cotizacion</h2>
                            <div class="col-md-12">
                                <label for="estatus" class="col-sm-1-12 col-form-label">Buscar producto</label>
                                <div class="input-group">
                                    <input id="buscar_productoss" class="form-control mr-sm-2" type="search" placeholder="Ejm: carroceria" aria-label="Search">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary" id="btn-seleccionar-producto">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Clave</label>
                                <div class="form-group">
                                    <input type="text" id="producto_id" class="form-control" placeholder="VOL-102032" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input id="producto_nombre" type="text" class="form-control" placeholder="Carroceria 2*3" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Precio publico</label>
                                <div class="form-group">
                                    <input id="producto_precio_publico" type="text" class="form-control" placeholder="$2587" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Cantidad</label>
                                <div class="form-group">
                                    <input id="producto_cantidad" type="number" class="form-control" placeholder="2" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Unidades</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Pza" id="producto_unidad">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Tiempo estimado de entrega</label>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Pza" id="producto_tiempo_entrega">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="direccion">Descripcion</label>
                                <div class="form-group">
                                    <textarea style="resize:none" name="producto_descripcion" id="producto_descripcion" rows="3" readonly class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Descuento %</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="10" id="producto_descuento">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" id="agregar_cotizacion">Agregar</button>
                            </div>
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Clave producto</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Precio unitario</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Descuento %</th>
                                        <th scope="col">Tiempo estimado</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody-tabla-cotizacion">
                                </tbody>
                            </table>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $("#buscar_cliente").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{route('Cotizaciones.searchcliente')}}",
                    type: "POST",
                    data: {
                        term: request.term,
                        _token: $("input[name=_token]").val()
                    },
                    dataType: "json",
                    success: function(data) {
                        var resp = $.map(data, function(obj) {
                            return obj.razonsocial;
                        });

                        response(resp);
                    }
                });
            },
            minLength: 1
        });
        $("#buscar_productoss").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{route('Cotizaciones.searchproducto')}}",
                    type: "POST",
                    data: {
                        term: request.term,
                        _token: $("input[name=_token]").val()
                    },
                    dataType: "json",
                    success: function(data) {
                        var resp = $.map(data, function(obj) {
                            return obj.nombre;
                        });
                        console.log(resp)
                        response(resp);
                    }
                });
            },
            minLength: 1
        });

    });

    $('#btn-seleccionar-cliente').click(function() {
        const cliente = $('#buscar_cliente').val()

        $.ajax({
            url: "{{route('Cotizaciones.buscarcliente')}}",
            type: "POST",
            data: {
                cliente: cliente,
                _token: $("input[name=_token]").val()
            },
            success: function(data) {
                console.log(data)
                $('#cliente_id').val(data.id ?? "Sin datos")
                $('#razonsocial').val(data.razonsocial ?? "Sin datos")
                $('#representante').val(data.representante ?? "Sin datos")
                $('#email').val(data.email ?? "Sin datos")
            }
        })
    })

    $('#btn-seleccionar-producto').click(function() {
        const producto = $('#buscar_productoss').val()

        $.ajax({
            url: "{{route('Cotizaciones.buscarproducto')}}",
            type: "POST",
            data: {
                producto: producto,
                _token: $("input[name=_token]").val()
            },
            success: function(data) {
                console.log(data)
                $('#producto_id').val(data.id ?? "Sin datos")
                $('#producto_nombre').val(data.nombre ?? "Sin datos")
                $('#producto_precio_publico').val(data.preciopublico ?? "Sin datos")
                $('#producto_cantidad').val(data.stock ?? "Sin datos")
                $('#producto_descripcion').val(data.descripcion ?? "Sin datos")
                $('#producto_descripcion_trix').val(data.descripcion ?? "Sin datos")
            }
        })
    })

    $('#agregar_cotizacion').click( function() {
        const id = uuid.v4()
        const productoId = $('#producto_id').val()
        const productoNombre = $('#producto_nombre').val()
        const productoPrecioPublico= $('#producto_precio_publico').val()
        const productoUnidad  =$('#producto_unidad').val()
        const productoDescuento = $('#producto_descuento').val()
        const productoTiempoEntrega = $('#producto_tiempo_entrega').val()

        const totalConDescuento = (( 100 - Number(productoDescuento) ) / 100) * Number(productoPrecioPublico) * parseInt(productoUnidad)
        const template = `
            <tr id="${id}">
                <td>${ productoId }</td>
                <td>${ productoNombre }</td>
                <td>${ productoPrecioPublico }</td>
                <td>${ productoUnidad }</td>
                <td>${ productoDescuento }%</td>
                <td>${ productoTiempoEntrega }</td>
                <td>${ totalConDescuento.toFixed(2) }</td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="eliminarCotizacion('${id}')">Eliminar</button>
                </td>
                <td hidden>
                    <input type="text" name="productos_id[]" value="${productoId}" hidden>
                    <input type="text" name="productos_nombre[]" value="${productoNombre}" hidden>
                    <input type="text" name="productos_precio_publico[]" value="${productoPrecioPublico}" hidden>
                    <input type="text" name="productos_unidad[]" value="${productoUnidad}" hidden>
                    <input type="text" name="productos_descuento[]" value="${productoDescuento}" hidden>
                    <input type="text" name="productos_tiempo_entrega[]" value="${productoTiempoEntrega}" hidden>
                    <input type="text" name="productos_total[]" value="${totalConDescuento}" hidden>

                </td>
            </tr>
        `
        $('#tbody-tabla-cotizacion').append(template)
    })

    function eliminarCotizacion(id){
        $(`#${id}`).remove()
    }

</script>

@endsection
