@extends('principal')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css
">
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
                    <form class="guardar" action="" method="post" novalidate>
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Clave de cotizacion</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="221811717">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Vendedor</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Lic Nestor">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Titulo de cotizacion</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Cotizacion de carrocerias">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="estatus" class="col-sm-1-12 col-form-label">Buscar cliente</label>
                                <div class="input-group">
                                    <input class="form-control mr-sm-2" type="search" name="razonsocial" id="razonsocial" placeholder="Ejm: Omar" aria-label="Search">
                                    <span class="input-group-btn">
                                        <button type="button" id="btn-seleccionar-cliente" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Clave</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cliente_id" id="cliente_id" value="{{old('cliente_id')}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Razon social</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="razonsocial" id="razonsocial" value="{{old('razonsocial')}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Representante</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="representante" name="representante" value="{{old('representante')}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Email</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="estatus" class="col-sm-1-12 col-form-label">Buscar producto</label>
                                <div class="input-group">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Ejm: carroceria" aria-label="Search">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Clave</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="VOL-102032">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Carroceria 2*3">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Precio publico</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="$2587">
                                </div>
                            </div>
                            <h2 class="text-center">Detalles de cotizacion</h2>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Cantidad</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="2">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Unidades</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Pza">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="razonsocial" class="col-sm-1-12 col-form-label">Tiempo estimado de entrega</label>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Pza">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="direccion">Descripcion</label>
                                <div class="form-group">
                                    <input type="hidden" name="direccion" id="direccion" value="">
                                    <trix-editor input="direccion"></trix-editor>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary">Agregar</button>
                            </div>
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">Clave producto</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio unitario</th>
                                        <th scope="col">Descuento</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Total con descuento</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Caja seca</td>
                                        <td><input type="text" class="form-control" name="cantidad" onChange="calculardescuento();"></td>
                                        <td><input type="text" class="form-control" name="precio" onChange="calculardescuento();"></td>
                                        <td><input type="text" class="form-control" name="descuento" readonly></td>
                                        <td><input type="text" class="form-control" name="total" readonly></td>
                                        <td><input type="text" class="form-control" name="preciofinal" readonly></td>
                                        <td><i class="fas fa-trash-alt"></i></td>

                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary">Guardar</button>
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
        $("#razonsocial").autocomplete({
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
    });

    $('#btn-seleccionar-cliente').click(function() {
        const cliente = $('#razonsocial').val()

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
   
    function calculardescuento() {

        var descuento = 10;
        var cantidad = $("input[name=cantidad]").val();
        var precio = $("input[name=precio]").val();
        var preciodescuento = (cantidad * precio);
        var preciofinal = (preciodescuento * descuento / 100); //200
        var preciocondescuento = (preciofinal - preciodescuento);
        $("input[name=descuento]").val(descuento);
        $("input[name=total]").val(preciodescuento);
        $("input[name=preciofinal]").val(preciocondescuento);
    }
</script>

@endsection