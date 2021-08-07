<!doctype html>
<html lang="es">

<head>
    <title>Grupo-Selkar</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    @yield('css')
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- VENDOR CSS -->
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        @include('componentes/navbar')
        @include('componentes/sidevar')
        <!-- Javascript -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('vendor/chartist/js/chartist.min.js')}}"></script>
        

        <!--datatables-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @if ( session()->has('success') )
                        <script>
                            Swal.fire(
                            'Exitoso!',
                            '{{ session()->get('success')}}',
                            'success'
                            )
                        </script>
                    @endif
        <div id="contenido">
            @yield('contenido')
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" integrity="sha512-cJMgI2OtiquRH4L9u+WQW+mz828vmdp9ljOcm/vKTQ7+ydQUktrPVewlykMgozPP+NUBbHdeifE6iJ6UVjNw5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @yield('js')
</body>

</html>
