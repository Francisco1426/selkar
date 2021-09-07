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
                    <h3 class="panel-title">Reporte Estatus</h3>
                    <p class="panel-subtitle">Listado de estatus</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('estatus.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar Estatus</a>
                </div>
            </div>
            <table id="estatus" class="table table-striped table-inverse mt-3 responsive">
                <thead class="thead-inverse bg-primary responsive">
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            @section('js')
            <script>
                $('#estatus').DataTable({
                    "responsive": true,
                    "processing": true,
                    "serverSide": true,
                    "autoWidth": false,
                    language: {
                        url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
                    },
                    "ajax": "{{route('estatus.datatables')}}",
                    "columns": [{
                            data: 'id'
                        },
                        {
                            data: 'nombre'
                        },
                        {
                            data: 'descripcion'
                        },
                        {
                            data: 'id',
                            render: function(data, type, full, meta) {
                                return `
                                <a href="/estatus/${data}/edit"
                                class="btn btn-success"
                                ${full.deleted_at ? 'hidden' : ''}>
                                <i class="fas fa-edit"></i>
                                </a>
                                `
                            }
                        }
                    ]
                });

                function reloadTable() {
                    $('#estatus').DataTable().ajax.reload();
                }
            </script>
            @endsection
        </div>
    </div>
</div>

@endsection
