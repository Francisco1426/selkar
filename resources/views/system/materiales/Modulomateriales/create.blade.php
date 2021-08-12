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
                    <h3 class="panel-title">Modulo de Control</h3>
                    <p class="panel-subtitle">Modulo de Control materiales</p>
                </div>
                <div class="panel-body">
                    <form action="{{route('Modulomateriales.guardar')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">

                            <div class="col-md-12">
                                <label for="estatus" class="col-sm-1-12 col-form-label">Buscar Vehiculo (Numero de Serie)</label>
                                <div class="input-group">
                                    <input type="search" class="form-control" name="numeroserie" id="numeroserie" placeholder="Busca el vehiculo..." >
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary" id="btn-seleccionar-vehiculo">Seleccionar</button>
                                    </span>
                                </div>
                                <div class="row" id="detallevehiculo">

                                    <div class="col-md-4" hidden>
                                        <label for="estatus" class="col-sm-1-12 col-form-label">Clave</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('vehiculo_id') is-invalid @enderror" name="vehiculo_id" id="vehiculo_id" value="{{old('vehiculo_id')}}" placeholder="" readonly>
                                        </div>
                                        @error('vehiculo_id')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                        
                                    <div class="col-md-4">
                                        <label for="estatus" class="col-sm-1-12 col-form-label">Vehiculo</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="nombre" id="vehiculo" value="{{old('nombre')}}" placeholder="" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="estatus" class="col-sm-1-12 col-form-label">Marca</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="marca" id="marca" value="{{old('marca')}}" placeholder="" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="estatus" class="col-sm-1-12 col-form-label">Producto</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="producto" id="producto" value="{{old('producto')}}" placeholder="" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-md-12">
                                <label for="estatus" class="col-sm-1-12 col-form-label">Buscar Material (Nombre)</label>
                                <div class="input-group">
                                    <input type="search" class="form-control" name="nombre" id="nombre" placeholder="Busca el material..." >
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary" id="btn-seleccionar-material">Seleccionar</button>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3" hidden>
                                <label for="clave" class="col-sm-1-12 col-form-label">Clave</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="material_id" id="material_id" value="" placeholder="VAL" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="clave" class="col-sm-1-12 col-form-label">Clave</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="clave" id="clave" value="" placeholder="VAL" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="tipomaterial" class="col-sm-1-12 col-form-label">Tipo de Material</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="tipomaterial" id="tipomaterial" value="" placeholder="" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="medida" class="col-sm-1-12 col-form-label">Medida</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="medida" id="medida" value="" placeholder="" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="estatus" class="col-sm-1-12 col-form-label">Estatus</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="estatus" id="estatus" value="" placeholder="" readonly>
                                </div>
                            </div>
                            
                            <div class="col-md-3">
                                <label for="cantidad" class="col-sm-1-12 col-form-label">Cantidad</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="cantidad" id="cantidad" value="" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="existente" class="col-sm-1-12 col-form-label">Existencia</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="existente" id="existente" value="" placeholder="" readonly>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="estatus_id" class="col-md-6 col-form-label">Fase</label>
                                <select class="form-control" name="fase" id="fase">
                                    @foreach ($fases as $fase)
                                    <option value="{{$fase->id}}">{{$fase->nombre}}</option>
                                    @endforeach                                    
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="fecha" class="col-sm-1-12 col-form-label">Fecha</label>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="fecha" id="fecha" value="" placeholder="">
                                </div>
                            </div>                            
                            </div>
                            <div class="col-md-12">
                                <label for="descripcion" class="col-sm-1-12 col-form-label">Observacioes</label>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="descripcion" id="descripcion" value="" placeholder="Descripcion....">
                                    <trix-editor input="descripcion"></trix-editor>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="button" id="btn-agregar-material" class="btn btn-primary float-rigth">Agregar</button>
                                </div>
                            </div>

                            <h2 class="text-center h2 mt-3"><b>Lista de Materiales para el Vehiculo a trabajar</b></h2>
                            <table id="lista-materiales" class="table table-striped"">
                                <thead>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Medida</th>
                                    <th>Vehiculo</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @if(old('id_material'))
                                        @foreach (old('id_material') as $key => $id_material)
                                            @php
                                                $idunico = random_int(1,1000); 

                                            @endphp
                                            <tr id="tr-material{{$idunico}}">
                                                <td>{{$id_material}}
                                                </td>   
                                                <td>{{old('nombre_material')[$key]}}</td> 
                                                <td><input type="number" class="form-control" name="cantidad_material[]" id="input-editar-material-{{$idunico}}" value="{{old('cantidad_material')[$key]}}" readonly></td>  
                                                <td>{{old('medida_material')[$key]}}</td> 
                                                <td>{{old('vehiculo_material_numero')[$key]}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success" onclick="modificarMaterial({{$idunico}})" id="btn-editar-material-{{$idunico}}"><i class="fas fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger" onclick="eliminarMaterial({{$idunico}})" id="btn-eliminar-material-{{$idunico}}"> <i class="fas fa-trash"></i></button>
                                                </td>
                                                
                                                <td hidden>
                                                    <input type="text" class="form-control" name="id_material[]" value="{{$id_material}}" hidden>
                                                    <input type="text" class="form-control" name="observaciones_material[]" value="{{old('observaciones_material')[$key]}}" hidden>
                                                    <input type="text" class="form-control" name="fecha_material[]" value="{{old('fecha_material')[$key]}}" hidden>
                                                    <input type="text" class="form-control" name="fases_material[]" value="{{old('fases_material')[$key]}}" hidden>
                                                    <input type="text" class="form-control" name="vehiculo_material[]" value="{{old('vehiculo_material')[$key]}}" hidden>  
                                                    <input type="text" class="form-control" name="nombre_material[]" value="{{old('nombre_material')[$key]}}" hidden>  
                                                    <input type="text" class="form-control" name="medida_material[]" value="{{old('medida_material')[$key]}}" hidden> 
                                                    <input type="text" class="form-control" name="vehiculo_material_numero[]" value="{{old('vehiculo_material_numero')[$key]}}" hidden>    

                                                </td>
                                
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js"></script>

    <script>
        $(document).ready(function (){
            $("#nombre").autocomplete({
                source: function(request, response){
                    $.ajax({
                        url: "{{route('Modulomateriales.search')}}",
                        type: "POST",
                        data: {
                            term : request.term,
                            _token:$("input[name= _token]").val()
                        },
                        dataType:"json",
                        success: function(data){
                            var resp = $.map(data, function(obj){
                                return obj.nombre;
                            });

                            response(resp);
                        }
                    });
                },
                minLength: 1
            });
        });

        $(document).ready(function(){
            $("#numeroserie").autocomplete({
                source: function(request, response){
                    $.ajax({
                        url: "{{route('Modulomateriales.searchvehiculo')}}",
                        type: "POST",
                        data:{
                            term: request.term,
                            _token:$("input[name=_token]").val()
                        },
                        dataType:"json",
                        success: function(data){
                            var resp = $.map(data, function(obj){
                                return obj.numeroserie;
                            });

                            response(resp);
                        }
                    });
                },
                minLength:1
            });
        });


        $('#btn-seleccionar-material').click(function(){
            const material = $('#nombre').val()
            // console.log(material)
            $.ajax({
                url: "{{route('Modulomateriales.buscarmaterial')}}",
                type: "POST",
                data: {
                    material : material,
                    _token:$("input[name= _token]").val()
                },
                success:function(data){
                    console.log(data)
                    $('#material_id').val(data.id ?? "Sin datos")
                    $('#clave').val(data.clave ?? "Sin datos")
                    $('#tipomaterial').val(data.tipomaterial ?? "Sin datos")
                    $('#medida').val(data.medida ?? "Sin datos")
                    $('#estatus').val(data.estatus ? data.estatus.nombre: "Sin datos")
                    $('#existente').val(data.existente ?? "Sin datos")
                }
            })
        });

        $('#btn-seleccionar-vehiculo').click(function(){
            const vehiculo = $('#numeroserie').val()

            $.ajax({
                url: "{{route('Modulomateriales.buscarvehiculo')}}",
                type: "POST",
                data: {
                    vehiculo: vehiculo,
                    _token:$("input[name= _token]").val()
                },
                success:function(data){
                    console.log(data)
                    $('#vehiculo_id').val(data.id ?? "Sin datos")
                    $('#vehiculo').val(data.nombre ?? "Sin datos")
                    $('#marca').val(data.marca ?? "Sin datos")
                    $('#producto').val(data.producto ? data.producto.nombre: "Sin datos")
                    
                }
            })
        })

        $("#btn-agregar-material").click(function(){
            const idMaterial = $('#material_id').val()
            const cantidad = $('#cantidad').val()
            const observaciones = $('#descripcion').val()
            const fecha = $('#fecha').val()
            const fases = $('#fase').val()
            const vehiculo_id = $('#vehiculo_id').val()
            const nombre =$('#nombre').val()
            const medida =$('#medida').val()
            const vehiculo =$('#numeroserie').val()
            const idunico=  Math.floor(Math.random()*10000+1+idMaterial);
            const id_eliminar = `btn-eliminar-material-${idunico}`
            const id = `btn-editar-material-${idunico}`
            const idinput = `input-editar-material-${idunico}`
        

            const html = `
            <tr id="tr-material${idunico}">
                <td>${idMaterial}
                </td>   
                <td>${nombre}</td> 
                <td><input type="number" class="form-control" name="cantidad_material[]" id="${idinput}" value="${cantidad}" readonly></td>  
                <td>${medida}</td> 
                <td>${vehiculo}</td>
                <td>
                    <button type="button" class="btn btn-success" onclick="modificarMaterial(${idunico})" id="${id}"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" onclick="eliminarMaterial(${idunico})" id="${id_eliminar}"> <i class="fas fa-trash"></i></button>
                </td>
                
                <td hidden>
                    <input type="text" class="form-control" name="id_material[]" value="${idMaterial}" hidden>
                    <input type="text" class="form-control" name="observaciones_material[]" value="${observaciones}" hidden>
                    <input type="text" class="form-control" name="fecha_material[]" value="${fecha}" hidden>
                    <input type="text" class="form-control" name="fases_material[]" value="${fases}" hidden>
                    <input type="text" class="form-control" name="vehiculo_material[]" value="${vehiculo_id}" hidden>  
                    <input type="text" class="form-control" name="nombre_material[]" value="${nombre}" hidden>  
                    <input type="text" class="form-control" name="medida_material[]" value="${medida}" hidden> 
                    <input type="text" class="form-control" name="vehiculo_material_numero[]" value="${vehiculo}" hidden>   
                </td>

            </tr>
            
            `

            
            $("#lista-materiales tbody").append(html)
               
        })

        function modificarMaterial(input){
            $(`#input-editar-material-${input}`).removeAttr("readonly")
        }

        function eliminarMaterial(id){
            $(`#tr-material${id}`).remove()
        }
    </script>
@endsection

@endsection