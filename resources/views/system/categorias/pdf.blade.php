<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de categorias</title>
    <style>
        body{
    font-family: Arial;
}
#main-container{
margin:150px auto;
width: 600px;
}

table{
background-color:white;
text-align: left;
border-collapse: collapse;
width: 100%;
}

th, td{

padding: 5px;
}
thead{
background-color: #232f3e;
border-bottom: solid 5px #232f3e;
color: white;
}
tr:nth-child(even){
background-color: #ddd;
}

tr:hover td{
background-color: #369681;
color: white;
}

h2{
    color: 000000;
     font-size: 20px;
     font-family: Arial;
     text-decoration-line: underline;
    padding: 20px;
   }

    </style>
</head>
<body>
    <div class="container">
        <h2>
            <center>Reporte de categorias</center>
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
                @foreach($categoriapdf as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nombre}}</td>
                    <td>{{$categoria->descripcion}}</td>
                    <td>{{$categoria->estatus->nombre}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
