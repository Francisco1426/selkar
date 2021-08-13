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
                                    <th>Nombre</th>
                                    <th>Marca</th>
                                    <th>Numero de Serie</th>
                                    <th>Operaciones</th>
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
                                    "ajax":"{{route('vehiculos.datatables')}}",
                                    "columns":[{
                                        data: 'id'
                                    },
                                    {
                                        data:'nombre'
                                    },
                                    {
                                        data:'marca'
                                    },
                                    {
                                        data:'numeroserie'
                                    },
                                    {
                                        data:'id',
                                        render: function(data, type, full, meta){
                                            return `
                                                <a href="/vehiculos/${data}/edit"
                                                class="btn btn-success"
                                                ${full.deleted_at ? 'hidden' : ''}>
                                                <i class="fas fa-edit"></i>
                                                </a>

                                            
                                                <a href="/vehiculos/${data}"
                                                class="btn btn-primary"
                                                ${full.deleted_at ? 'hidden' : ''}>
                                                <i class="far fa-eye"></i>
                                                </a>`
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