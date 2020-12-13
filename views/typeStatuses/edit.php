<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Editar Tipo de Estado</h1>
	</section>	
	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Tipo de Estado</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=typeStatus&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $typeStatus[0]->id; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ingrese su nombre" value="<?php echo $typeStatus[0]->name;  ?>">
					</div>					
					<div class="form-group">					
						<button class="btn btn-primary">Editar</button>	
					</div>
				</form>
			</div>
		</div>		
	</section>
</main>