<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}">
    <title>Reporte de clientes</title>
</head>
<body>
    <div class="container">
        <img src="{{asset('img/logo.JPG')}}" alt="" width="110" height="100">
        <h2>
            <center>Reporte de clientes</center>
        </h2>
        <table class="table table-striped table-hover">
            <thead class="">
                <tr>
                    <th>Clave</th>
                    <th>Razon social</th>
                    <th>Tipo de cliente</th>
                    <th>Celular particular</th>
                    <th>Representante</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientepdf as $cliente)
                <tr>
                    <td>{{ $cliente->id}}</td>
                    <td>{{$cliente->razonsocial}}</td>
                    <td>{{$cliente->tipocliente}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->representante}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
