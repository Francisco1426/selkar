@extends('principal')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section('contenido')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Procesos</h3>
                    <p class="panel-subtitle">Listado de procesos local</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('procesos.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Crear Proceso</a>
                </div>
            </div>
            <table id="procesos" class="table table-striped table-inverse mt-3 responsive">
                <thead class="thead-inverse bg-primary responsive">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            @section('js')
            <script>
                $('#procesos').DataTable({
                    "responsive":true,
                    "processing":true,
                    "serverSide":true,
                    "autoWidth":false,
                    "ajax":"{{route('procesos.datatables')}}",
                    "columns":[{
                        data: 'id'
                    },
                    {
                        data: 'nombre'
                    },
                    {
                        data: 'descripcion'
                    },
                    {
                        data: 'estatus.nombre'
                    },
                    {
                        data:'id',
                        render: function(data, type, full, meta){
                            return `
                                <a href="/procesos/${data}/edit"
                                class="btn btn-success"
                                ${full.deleted_at ? 'hidden' : ''}>
                                <i class="fas fa-edit"></i>
                                </a>

                                <a href="/procesos/${data}/edit"
                                class="btn btn-danger"
                                ${full.deleted_at ? 'hidden' : ''}>
                                <i class="fas fa-trash"></i>
                                 </a>

                                <a href="/procesos/${data}/edit"
                                class="btn btn-primary"
                                ${full.deleted_at ? 'hidden' : ''}>
                                <i class="far fa-eye"></i>
                                 </a>`
                        }
                    }
                    ]
                });

                function reloadTable(){
                    $('#procesos').DataTable().ajax.reload();
                }
            </script>
            @endsection
        </div>
    </div>
</div>

@endsection
