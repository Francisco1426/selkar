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
                    <h3 class="panel-title">Reporte Categorias</h3>
                    <p class="panel-subtitle">Listado de categorias</p>
                </div>
                <div class="panel-body">
                    <a href="{{ route('categorias.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar Categoria</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-inverse mt-3 responsive" id="categorias">
                        <thead class="thead-inverse bg-primary responsive">
                            <tr>
                                <th>Clave</th>
                                <th>Categoria</th>
                                <th>Descripcion</th>
                                <th>Estatus</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    @section('js')
                    <script>
                        $('#categorias').DataTable({
                            "responsive": true,
                            "processing": true,
                            "serverSide": true,
                            "autoWidth": false,
                            language: {
                                url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
                            },
                            "ajax": "{{route('categorias.datatables')}}",
                            "columns": [{
                                    data: 'id',
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
                                    data: 'id',
                                    render: function(data, type, full, meta) {
                                        return `
                                        <a href="/categorias/${data}/edit"
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
                            $('#categorias').DataTable().ajax.reload();
                        }
                    </script>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
