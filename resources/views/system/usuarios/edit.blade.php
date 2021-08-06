@extends('principal')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
@endsection
@section('contenido')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alta de usuarios</h3>
                        <p class="panel-subtitle">Listado de usuarios</p>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('usuarios.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                            name="nombre" id="nombre" value="" placeholder="Escriba el nombre....">
                                    </div>

                                    @error('nombre')
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Correo</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('correo') is-invalid @enderror"
                                            name="correo" id="correo" value="" placeholder="Escriba el correo....">
                                    </div>

                                    @error('correo')
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Contraseña</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('contraseña') is-invalid @enderror"
                                            name="contraseña" id="contraseña" value="" placeholder="Escriba la contraseña....">
                                    </div>

                                    @error('contraseña')
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Tipo de usuario</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('usuario') is-invalid @enderror"
                                            name="usuario" id="usuario" value="" placeholder="Tipo de usuario....">
                                    </div>

                                    @error('usuario')
                                        <small class="text-danger">{{$message}}</small> 
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



@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>
@endsection