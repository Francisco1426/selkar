@extends('principal')
@section('contenido')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css">
@endsection

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de materiales para produccion</h3>
                    <p class="panel-subtitle">Lista de materiales</p>
                </div>
                <div class="panel-body">
                    <form action="{{ route('materiales.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">

                            <div class="col-md-6">
                                <label for="clave" class="col-sm-1-12 col-form-label">Clave</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('clave') is-invalid @enderror" name="clave" id="clave" value="{{ old('clave')}}" placeholder="" Escribe la clave....">
                                </div>

                                @error('clave')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="nombre" class="col-sm-1-12 col-form-label">Nombre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre')}}" placeholder="Escriba el nombre">
                                </div>

                                @error('nombre')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="medida" class="col-sm-1-12 col-form-label"> Unidad de Medida</label>
                                <div class="form-group">
                                    <input type="text" class="form-control @error('medida') is-invalid @enderror" name="medida" id="medida" value="{{old('medida')}}" placeholder="Buscar">
                                    <div id="lista-material">

                                    </div>
                                </div>
                                @error('medida')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="col-md-6">
                                <label for="tipomaterial" class="col-sm-1-12 col-form-label">Tipo de material</label>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipomaterial') is-invalid @enderror" type="radio" name="tipomaterial" id="tipomaterial" value="Acabado">
                                        Acabado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        <input class="form-check-input @error('tipocliente') is-invalid @enderror" type="radio" name="tipomaterial" id="tipomaterial" value="Estructural">
                                        Estructural
                                    </label>
                                </div>

                                @error('tipomaterial')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="estatus_id" class="col-md-6 col-form-label">Estatus</label>
                                <select class="form-control  @error('estatus_id') is-invalid @enderror" name="estatus_id" id="estatus_id">
                                    @foreach($estatus as $estatu)
                                    <option {{old('estatu_id') == $estatu->id ? 'selected' : ''}} value="{{$estatu->id}}">
                                        {{$estatu->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('estatus_id')
                                <small class="text-danger"> {{ $message }} </small>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="existente" class="col-sm-1-12 col-form-label">Cantidad</label>
                                <div class="form-group">
                                    <input type="number" class="form-control @error('existente') is-invalid @enderror" name="existente" id="existente" value="{{old('existente')}}" placeholder="Indique la cantidad">
                                </div>
                                @error('existente')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-12">
                            <label for="descripcion" class="col-sm-1-12 col-form-label">Descripcion</label>
                            <div class="form-group">
                                <input type="hidden" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion" value="{{ old('descripcion')}}" placeholder="Descripcion">
                                <trix-editor input="descripcion"></trix-editor>
                            </div>

                            @error('descripcion')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-11">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>

<script>
    // var curso =['html','css','java','php','laravel','python'];
    // $('#medida').autocomplete({
    //     source:curso
    // });
    $(document).ready(function() {
        $("#medida").autocomplete({

            source: function(request, response) {
                $.ajax({
                    url: "{{route('materiales.search')}}",
                    type: "POST",
                    data: {
                        term: request.term,
                        _token: $("input[name = _token]").val()
                    },
                    dataType: "json",
                    success: function(data) {
                        var resp = $.map(data, function(obj) {
                            return obj.medida;
                        });

                        response(resp);
                    }
                });
            },
            minLength: 1
        });
    });

    //
</script>
@endsection

@endsection
