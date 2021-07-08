@extends('principal')

@section('contenido')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Alta Material</h3>
                    <p class="panel-subtitle">Llena todos los campos</p>
                </div>
                <div class="panel-body">
                    <form action="{{route('materiales.store')}}" method="post">
                    @csrf

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="">

                    <label for="medida">Unidad de Medida:</label>
                    <input type="text" name="unidad" id="">

                    <label for="tipomaterial">Tipo de Material</label>
                    <input type="text" name="tipomaterial" id="">

                    <label for="descripcion"></label>
                    <input type="text" name="descripcion" id="">

                    <button type="submit" class="btn btn-success">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection