<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Nuevo Estado</h1>
	</section>	

	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Estado</h2>
			</div>
			<div class="card-body w-100">
				<form action="?controller=status&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ingrese nombre estado">
					</div>					
					<div class="form-group">					
						<button class="btn btn-primary">Guardar</button>	
					</div>
				</form>
			</div>
		</div>		
	</section>
</main>
