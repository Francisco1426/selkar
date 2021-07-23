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
                    <h3 class="panel-title">Reporte Clientes</h3>
                    <p class="panel-subtitle">Listado de productos</p>
                </div>
                <div class="panel-body">
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar Cliente</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-inverse mt-3 responsive" id="clientes">
                        <thead class="thead-inverse bg-primary responsive">
                            <tr>
                                <th>Clave</th>
                                <th>Empresa</th>
                                <th>Telefono</th>
                                <th>Representante</th>
                                <th>Tipo cliente</th>
                                <th>Estatus</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    @section('js')
                    <script>
                        $('#clientes').DataTable({ 
                            "responsive": true,
                            "processing": true,
                            "serverSide": true,
                            "autoWidth": false,
                            language: {
                                url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
                            },
                            "ajax": "{{route('clientes.datatables')}}",
                            "columns": [{
                                    data: 'id'
                                },
                                {
                                    data: 'razonsocial'
                                },
                                {
                                    data: 'telefono'
                                },
                                {
                                    data: 'representante'
                                },
                                {
                                    data: 'tipocliente'
                                },
                                {
                                    data: 'estatus.nombre'
                                },
                                {
                                    data: 'id',
                                    render: function(data, type, full, meta) {
                                        return `
                                                 <a href="/clientes/${data}/edit"
                                                class="btn btn-success"
                                                ${full.deleted_at ? 'hidden' : ''}>
                                                <i class="fas fa-edit"></i>
                                                </a>

                                                <a href="/clientes/${data}/edit"
                                                class="btn btn-danger"
                                                ${full.deleted_at ? 'hidden' : ''}>
                                                <i class="fas fa-trash"></i>
                                                </a>
                                                <a href="/clientes/${data}/edit"
                                                class="btn btn-primary"
                                                ${full.deleted_at ? 'hidden' : ''}>
                                                <i class="far fa-eye"></i>
                                                </a>
                                        `
                                    }
                                }

                            ]
                        });
                        function reloadTable() {
                            $('#clientes').DataTable().ajax.reload();
                        }
                    </script>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
