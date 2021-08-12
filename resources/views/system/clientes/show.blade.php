@extends('principal')

@section('contenido')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Detalles de Clientes</h3>
                </div>
                <div class="panel-body">
                    <div class="form-row">

                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Razon social:</label>
                            {{$clientes->razonsocial}}
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Razon social:</label>
                            {{$clientes->razonsocial}}
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Telefono:</label>
                            {{$clientes->telefono}}
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Email:</label>
                            {{$clientes->email}}
                        </div>
                          <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Direccion:</label>
                            {!!$clientes->direccion!!}
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Representante:</label>
                            {{$clientes->representante}}
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Celular:</label>
                            {{$clientes->celular}}
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Estatus:</label>
                            {{$clientes->estatus->nombre}}
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Tipo de cliente:</label>
                            {{$clientes->tipocliente}}
                        </div>
                        <div class="col-md-6">
                            <label for="clave" class="col-sm-1-12 col-form-label">Estatus cliente:</label>
                            {{$clientes->estatuscliente}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
