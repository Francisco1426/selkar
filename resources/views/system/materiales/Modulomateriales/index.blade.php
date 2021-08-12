@extends('principal')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section('contenido')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Vehiculo</h3>
                    <p class="panel-subtitle">Llena todos los campos</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('vehiculos.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Numero Vehiculo</a>
                    <br><br>
                </div>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="vehiculos" class="table table-striped table-inverse mt-3 responsive">
                            <thead class="thead-inverse bg-primary responsive">
                                <tr>
                                    <th>Clave</th>
                                    <th>Vehiculo</th>
                                    <th>Material</th>
                                    <th>Fase</th>
                                    <th>Operacion</th>


                                    
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        @section('js')
                            <script>
                                $('#vehiculos').DataTable({
                                    "responsive":true,
                                    "processing":true,
                                    "serverSide":true,
                                    "autoWidth":false,
                                    language: {
                                        url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
                                    },
                                    "ajax":"{{route('Modulomateriales.datatables')}}",
                                    "columns":[{
                                        data: 'vehiculo_id'
                                    },
                                    {
                                        data: 'nombre_vehiculo'
                                    },
                                    {
                                        data:'nombre_material'
                                    },
                                    {
                                        data:'nombre_fase'
                                    },
                                    {
                                        data:'vehiculo_id',
                                        render: function(data, type, full, meta){
                                            return `
                                                <a href="/Modulomateriales/${data}/edit"
                                                class="btn btn-success">
                                                <i class="fas fa-edit"></i>
                                                </a>
                                                    `
                                        }
                                    }
                                    ]

                                });

                                function reloadTable(){
                                    $('#vehiculos').DataTable().ajax.reload();
                                }
                            </script>
                        @endsection
                    </div>
                </div>
        </div>
    </div>
</div>

    
@endsection