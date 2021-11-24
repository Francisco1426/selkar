@extends('principal')
@section('contenido')


<style>
	.panel-body{
		width: 30%;
	}
</style>

<div class="main"> 
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title">Registro de materiales para produccion</h3>
                    <p class="panel-subtitle">Lista de materiales</p>
                </div>
				<div class="row">

					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="fa fa-eye"></i></span>
							<p>
								<span class="number">{{$cantidadempleados}}</span>
								<span class="title">Empledos</span>
							</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="fa fa-bar-chart"></i></span>
							<p>
								<span class="number">{{$cantidadvehiculos}}</span>
								<span class="title">Vehiculos</span>
							</p>
						</div>
					</div>

					<div class="col-md-3">
						<div class="metric">
							<span class="icon"><i class="fa fa-bar-chart"></i></span>
							<p>
								<span class="number">{{$cantidadmateriales}}</span>
								<span class="title">Materiales</span>
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<h3 class="panel-title">Graficos de categorias de productos</h3>
						
						<canvas id="myChart" width="400" height="400"></canvas>
	
					</div>
	
					<div class="col-md-6">
						<h3 class="panel-title">Graficos de Materiales</h3>
						
						<canvas id="grafico" width="400" height="400"></canvas>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js" integrity="sha512-asxKqQghC1oBShyhiBwA+YgotaSYKxGP1rcSYTDrB0U6DxwlJjU59B67U8+5/++uFjcuVM8Hh5cokLjZlhm3Vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>
	var labels = []
	var datos = []
	console.log('hola')
	$.ajax({
		type: 'GET',
		url: '/obtenercategorias',
		success: function(resp){
			console.log(resp)
			resp.forEach(categoria => {
				labels.push(categoria.nombre)
				datos.push(categoria.productos_cantidad)
				
			});
			console.log(datos)
			var ctx = document.getElementById('myChart').getContext('2d');

			const data = {
					labels: labels,
					
					datasets: [{
					label: 'Graficos catergorias',
					data: datos,
					backgroundColor: [
						'rgb(45, 171, 213)',
						'rgb(226, 171, 53 )',
					],
					hoverOffset: 4
					}]
				};

				const config = {
					type: 'pie',
					data: data,
				};

				var myChart = new Chart(ctx, config);

						}
	})

	var labelsdos = []
	var datosdos = []
	console.log('hola')
	$.ajax({
		type: 'GET',
		url: '/obtenerestatus',
		success: function(resp){
			console.log(resp)
			resp.forEach(estatu => {
				labelsdos.push(estatu.nombre)
				datosdos.push(estatu.materiales_activo)
				
			});
			console.log(datosdos)
			var ctxdos = document.getElementById('grafico').getContext('2d');

			const data = {
					labels: labelsdos,
					
					datasets: [{
					label: 'Graficos materiales',
					data: datosdos,
					backgroundColor: [
						'rgb(48, 171, 48)',
						'rgb(54, 53, 226  )',
						'rgb(1, 47, 50)',
					],
					hoverOffset: 4
					}]
				};

				const config = {
					type: 'pie',
					data: data,
				};

				var grafico = new Chart(ctxdos, config);

						}
	})
	
	// categorias.forEach(categoria => {
	// 	labels.push(categoria.nombre)
	// 	datos.push(categoria.productos_cantidad)
	// });

</script>    
@endsection

@endsection