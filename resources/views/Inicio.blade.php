@extends('Principal')

@section('contenido')

<!-- MAIN -->
<div class="main">
	<div class="container-fluid text-center">
		<h4 class="text-center">Bienvenido al sistema</h4>
		<div class="card bg-primary" style="width: 18rem;">
		<a href=""><img src="{{asset('img/imagen.png')}}" width="150" heigth="100" alt="Klorofil Logo" class="img-responsive logo"></a>

			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Go somewhere</a>
			</div>
		</div>
	</div>

</div>
<!-- END MAIN -->
<div class="clearfix"></div>

<footer>
	<div class="container-fluid">
		<p class="copyright">&copy; 2021 <a href="selkar.mex.tl" target="_blank">UTVT</a>. Grupo-Selkar.</p>
	</div>
</footer>
</div>
<!-- END WRAPPER -->
@stop