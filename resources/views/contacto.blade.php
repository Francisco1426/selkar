@include ('vista1')

<!-- inner page banner -->

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
<br>
<br>


    <div class="container mt-5">

        <form method="post" action="{{ route('contact.store') }}">
            

            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <center><h2>Formulario de Contacto</h2></center>
              <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

            <div class="form-group">
                <label><b>Nombre Completo :</b></label>
                <input type="text" class="form-control" name="name" id="name">
            </div>

            <div class="form-group">
                <label><b>Email :</b></label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label><b>Telefono :</b></label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>

            <div class="form-group">
                <label><b>Asunto :</b></label>
                <input type="text" class="form-control" name="subject" id="subject">
            </div>

            <div class="form-group">
                <label><b>Mensaje :</b></label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>

            <input type="submit" name="send" value="Enviar" class="btn btn-success btn-block">
        </form>
    </div>
    <br>


@include ('vista2')
