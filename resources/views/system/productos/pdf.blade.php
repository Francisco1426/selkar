<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}">
    <title>Reporte de productos</title>
</head>
<body>
    <div class="container">
        <img src="{{url('http://localhost/selkar/public/imagen/20210810180401.jpg')}}">

        <h2>
            <center>Reporte de productos</center>
        </h2>
        <table class="table table-striped table-hover">
            <thead class="">
                <tr>
                    <th>Clave</th>
                    <th>Nombre producto</th>
                    <th>Categoria</th>
                    <th>Dimension</th>
                    <th>Precio publico</th>
                    <th>Tipo de producto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productopdf as $producto)
                <tr>
                    <td>{{ $producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->categorias->nombre}}</td>
                    <td>{{$producto->dimension}}</td>
                    <td>{{$producto->preciopublico}}</td>
                    <td>{{$producto->tipoproducto}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
