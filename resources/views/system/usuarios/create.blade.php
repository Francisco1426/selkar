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
                        <form action="" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" value="" placeholder="Escriba el nombre....">
                                    </div>

                                    @error('name')
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="col-sm-1-12 col-form-label">Email</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('correo') is-invalid @enderror"
                                            name="email" id="email" value="" placeholder="Escriba el correo....">
                                    </div>

                                    @error('email')
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="password" class="col-sm-1-12 col-form-label">Password</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('contraseña') is-invalid @enderror"
                                            name="password" id="passwrod" value="" placeholder="Escriba la contraseña....">
                                    </div>

                                    @error('password')
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="tipousuarios" class="col-sm-1-12 col-form-label">Tipo de usuario</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('tipousuario') is-invalid @enderror"
                                            name="tipousuario" id="tipousuario" value="" placeholder="Tipo de usuario....">
                                    </div>

                                    @error('tipousuario')
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