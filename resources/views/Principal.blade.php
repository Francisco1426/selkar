<!doctype html>
<html lang="es">

<head>
    <title>Grupo-Selkar.....</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/chartist/css/chartist-custom.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/favicon.png')}}">


    {{-- Data tables --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">


</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        @include('componentes/navbar')
        @include('componentes/sidevar')


        <!-- Aqui Comienza la parte del formulario -->




        <!-- Javascript -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('vendor/chartist/js/chartist.min.js')}}"></script>
        <script src="{{asset('scripts/klorofil-common.js')}}"></script>


      {{-- Data TABLE --}}
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
      <script>
          $(document).ready(function() {
          $('#example').DataTable({
              "language": {
                  "lengthMenu": "Mostrar _MENU_ registros por pagina",
                  "zeroRecords": "Nada encontrado - disculpa",
                  "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                  "infoEmpty": "No records available",
                  "infoFiltered": "(filtrado de _MAX_ registros totales)",
                  "search": "Buscar:",
                  "paginate":{
                      "next":"Siguiente",
                      "previous":"Anterior"
                  }
              }
          });
      } );
      </script>

      
      
        
        
        <div id="contenido">
            @yield('contenido')
        </div>
</body>

</html>
