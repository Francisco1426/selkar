@extends('principal')
@section('contenido')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alta de usuarios</h3>
                        <p class="panel-subtitle">Llena los campos correspondientess</p>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('usuarios.store') }}" method="POST">
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
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Correo</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" value="" placeholder="Escriba el correo....">
                                    </div>

                                    @error('email')
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Contraseña</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('password') is-invalid @enderror"
                                            name="password" id="password" value="" placeholder="Escriba la contraseña....">
                                    </div>

                                    @error('password')
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror

                                </div>

                                <div class="col-md-6">
                                    <label for="nombre" class="col-sm-1-12 col-form-label">Tipo de usuario</label>
                                    <div class="form-group">
                                       <select name="rol" class="form-control" id="rol">
                                           <option value="Admin">Admin</option>
                                           <option value="Compras">Compras</option>
                                           <option value="Ventas">Ventas</option>
                                           <option value="Produccion">Produccion</option>
                                           <option value="Logistica">Logistica</option>
                                           <option value="Clientes">Clientes</option>
                                       </select>
                                    </div>
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