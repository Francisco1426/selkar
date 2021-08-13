<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de productos</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
            font-size: 12px;
            margin: 45px;
            width: 700px;
            text-align: left;
            border-collapse: collapse;
        }

        th {
            font-size: 13px;
            font-weight: normal;
            padding: 8px;
            background: #b9c9fe;
            border-top: 4px solid #FFFAF0;
            border-bottom: 1px solid #FFFAF0;
            color: #039;
        }

        td {
            padding: 8px;
            background: #e8edff;
            border-bottom: 1px solid #fff;
            color: #669;
            border-top: 1px solid transparent;
        }

        tr:hover td {
            background:  #FFFAF0;
            color: #339;
        }
        h2 {
            color: #000000;
            font-weight: normal;
            font-size: 15px;
            font-family: Arial;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="display-1">
            <center>Lista de precios de carrocerias</center>
        </h2>
        <table class="table table-striped table-hover">
            <thead class="">
                <tr>
                    <th>Clave</th>
                    <th>Concepto</th>
                    <th>Tamaño</th>
                    <th>Precio distribuidor</th>
                    <th>Precio contado</th>
                    <th>Precio publico</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listaprecio as $precios)
                <tr>
                    <td>{{$precios->id}}</td>
                    <td>{{$precios->nombre}}</td>
                    <td>{{$precios->dimension}}</td>
                    <td>{{$precios->preciodistribuidor}}</td>
                    <td>{{$precios->preciocontado}}</td>
                    <td>{{$precios->preciopublico}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
