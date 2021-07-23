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
                    <h3 class="panel-title">Reporte Material</h3>
                    <p class="panel-subtitle">Llena todos los campos</p>
                </div>
                <div class="panel-body">
                    <a href="{{route('materiales.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Nuevo Material</a>
                    <br><br>
                </div>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="materiales" class="table table-striped table-inverse mt-3 responsive">
                            <thead class="thead-inverse bg-primary responsive">
                                <tr>
                                    <th scope="col">Clave</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Unidad Medida</th>
                                    <th scope="col">Tipo Material</th>
                                    <th scope="col">Operaciones</th>
                                </tr>
                            </thead> 
                            <tbody>
                                
                            </tbody>
                        </table>
                        @section('js')
                        <script>
                            $('#materiales').DataTable({
                                "responsive":true,
                                "processing":true,
                                "serverSide":true,
                                "autoWidth":false,
                                "ajax":"{{route('materiales.datatables')}}",
                                "columns":[{
                                    data: 'id'
                                },
                                {
                                    data:'nombre'
                                },
                                {
                                    data: 'medida'
                                },
                                {
                                    data:'tipomaterial'
                                },
                                {
                                    data:'id',
                                    render: function(data, type, full, meta){
                                        return `
                                            <a href="/materiales/${data}/edit"
                                            class="btn btn-success"
                                            ${full.deleted_at ? 'hidden' : ''}>
                                            <i class="fas fa-edit"></i>
                                            </a>
                                            
                                            <a href="/materiales/${data}/edit"
                                            class="btn btn-danger"
                                            ${full.deleted_at ? 'hidden' : ''}>
                                            <i class="fas fa-trash"></i>
                                            </a>
                                            <a href="/materiales/${data}/edit"
                                            class="btn btn-primary"
                                            ${full.deleted_at ? 'hidden' : ''}>
                                            <i class="far fa-eye"></li>
                                            </a>`
                                            
                                    }
                                }
                                ]
                            });

                            function reloadTable(){
                                $('#materiales').DataTable().ajax.reload();
                            }
                        </script>
                        @endsection
                    </div>
                </div>           
        </div>
    </div>
</div>
    
@endsection