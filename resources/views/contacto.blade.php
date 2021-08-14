@include ('vista1')
<!-- inner page banner -->
<div class="container col-md-10 mt-5">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h4 class="text-center">Contactanos</h4>
            </div>
            <form method="post" action="{{ route('contact.store') }}">
                @csrf
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="nombre" class="col-sm-1-12 col-form-label">Nombre completo</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name">
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre" class="col-sm-1-12 col-form-label">Email</label>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre" class="col-sm-1-12 col-form-label">Telefono</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone">
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre" class="col-sm-1-12 col-form-label">Asunto</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject">
                            @error('subject')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="nombre" class="col-sm-1-12 col-form-label">Mensaje</label>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
                            @error('message')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" name="send" value="Enviar" class="btn btn-success">
                </div>
            </form>

        </div>
    </div>

</div>
<br>
<div id="inner_banner" class="section inner_banner_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <div class="title-holder">
                        <div class="title-holder-cell text-left">
                            <h1 class="page-title">Contacto</h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Inicio</a></li>
                                <li class="active">Contacto</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include ('vista2')
