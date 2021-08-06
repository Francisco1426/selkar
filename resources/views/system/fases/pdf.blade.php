<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/tabla.css')}}">
    <title>Reporte de fases</title>
</head>
<body>
    <div class="container">
        <img src="{{asset('img/logo.JPG')}}" alt="" width="110" height="100">
        <h2>
            <center>Reporte de fases</center>
        </h2>
        <table class="table table-striped table-hover">
            <thead class="">
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Estatus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fasepdf as $fase)
                <tr>
                    <td>{{$fase->id}}</td>
                    <td>{{$fase->nombre}}</td>
                    <td>{{$fase->descripcion}}</td>
                    <td>{{$fase->estatus_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
