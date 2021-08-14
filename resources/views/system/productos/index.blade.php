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
                    <a href="{{route('productos.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Agregar
                        Producto</a>
                    <a href="{{url('pdfproductos') }}"><button class="btn btn-danger"><i
                                class="fas fa-file-pdf"></i></button></a>
                    <a href="{{url('pdfprecios') }}"><button class="btn btn-danger"><i
                                class="fas fa-file-pdf"></i></button></a>


                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-inverse dt-responsive nowrap" style="width:100%"
                        id="productos">
                        <thead class="thead-inverse bg-primary responsive">
                            <tr>
                                <th>Clave</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio publico</th>
                                <th>Precio publico</th>
                                <th>Precio publico</th>
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
                                render: function(data, type, full, meta) {
                                    const ImagenPorDefecto =
                                        `https://www.amaltasindia.in/UploadPhoto/no_img.jpg`;
                                    return `<img src="${full.imagen ?  `/imagen/${full.imagen}` : ImagenPorDefecto}" width="100" height="80">`
                                }

                            },
                            {
                                data: 'nombre'
                            },
                            {
                                data: 'preciodistribuidor'
                            },
                            {
                                data: 'preciocontado'
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
                                                </a>

                                                <a href="/productos/${data}"
                                                class="btn btn-primary"
                                                ${full.deleted_at ? 'hidden' : ''}>
                                                <i class="far fa-eye"></i>
                                                </a>
                                                </a>
                            <button class="btn ${full.deleted_at ? 'btn-success' : 'btn-danger'}"
                            ${full.deleted_at ? `onclick="activeRecord(${data})"` : `onclick="deleteRecord(${data})"`}
                            onclick="deleteRecord(${data})"
                            >
                            <i class="${full.deleted_at ? 'fas fa-power-off' : 'fas fa-trash-alt'}"></i>
                            </button>
                                                    `



                                }
                            }
                        ]
                    });

                    function deleteRecord(id) {
                        Swal.fire({
                            title: 'Estas seguro de eliminar este producto?',
                            text: "No podras revertir cambios!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, eliminar producto!',
                            cancelButtonText: 'Cancelar!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    type: 'DELETE',
                                    url: `/productos/${id}`,
                                    data: {
                                        _token: $('[name="_token"]').val(),
                                    },
                                    success: res => {
                                        Swal.fire(
                                            'Eliminado!',
                                            `El producto ${res.producto.nombre} ha sido ${res.message} exitosamente.`,
                                            'success'
                                        );
                                        reloadTable();
                                    },
                                    error: error => {
                                        console.log(error);
                                    },
                                });

                            }
                        });
                    }

                    function activeRecord(id) {
                        Swal.fire({
                            title: 'Estas seguro que deseas activar esta producto?',
                            text: "No podras revertir cambios!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, activar producto!',
                            cancelButtonText: 'Cancelar!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    type: 'PUT',
                                    url: `/productos/${id}/active-record`,
                                    data: {
                                        _token: $('[name="_token"]').val(),
                                    },
                                    success: res => {
                                        Swal.fire(
                                            'Activado!',
                                            `El producto ${res.producto.nombre} ha sido activado exitosamente.`,
                                            'success'
                                        );
                                        reloadTable();
                                    },
                                    error: error => {
                                        console.log(error);
                                    },
                                });
                            }
                        });
                    }

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
