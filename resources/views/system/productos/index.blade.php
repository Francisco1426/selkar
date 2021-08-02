@extends('principal')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection
@section('contenido')


<div class="main" method="POST">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Reporte Productos</h3>
                    <p class="panel-subtitle">Listado de productos generales</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('productos.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar Producto</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-inverse mt-3 responsive" id="productos">
                        <thead class="thead-inverse bg-primary responsive">
                            <tr>
                                <th>Clave</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio inicial</th>
                                <th>Categoria</th>
                                <th>Estatus</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    @section('js')
                    <script>
                        $('#productos').DataTable({
                            "responsive": true,
                            "processing": true,
                            "serverSide": true,
                            "autoWidth": false,
                            language: {
                                url: "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
                            },
                            "ajax": "{{route('productos.datatables')}}",
                            "columns": [{
                                    data: 'clave'
                                },
                                {
                                    data: 'imagen',
                                    render: function(data, type, full, meta){
                                        const ImagenPorDefecto = `https://www.amaltasindia.in/UploadPhoto/no_img.jpg`;
                                        return `<img src="${full.imagen ?  `/imagen/${full.imagen}` : ImagenPorDefecto}" width="100" height="80">`
                                    }

                                },
                                {
                                    data: 'nombre'
                                },
                                {
                                    data: 'preciopublico'
                                },
                                {
                                    data: 'categorias.nombre'
                                },
                                {
                                    data: 'estatus.nombre'
                                },
                                {
                                    data: 'id',
                                    render: function(data, type, full, meta) {
                                        return `
                                                 <a href="/productos/${data}/edit"
                                                class="btn btn-success"
                                                ${full.deleted_at ? 'hidden' : ''}>
                                                <i class="fas fa-edit"></i>
                                                </a>`

                                    }
                                }
                            ]
                        });

                        function reloadTable() {
                            $('#productos').DataTable().ajax.reload();
                        }
                    </script>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
