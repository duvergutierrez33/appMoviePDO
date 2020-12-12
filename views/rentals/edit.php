<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Editar Pelicula</h1>
	</section>	
	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Pelicula</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=movie&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $movie[0]->id; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ingrese su nombre" value="<?php echo $movie[0]->name;  ?>">
					</div>
					<div class="form-group">
						<label>Derscripción</label>
						<input type="text" name="description" class="form-control" placeholder="" value="<?php echo $movie[0]->description; ?>">
					</div>					
					<div class="form-group">
						<label>Usuario</label>
						<select name="user_id" class="form-control">
							<option value="">Seleccione...</option>							
							<?php
								foreach($users as $user) {
									if($user->id == $movie[0]->user_id)
										echo '<option selected value="'.$user->id.'">'.$user->name.'</option>';
									else
										echo '<option value="'.$user->id.'">'.$user->name.'</option>';

								}
							?>
						</select>
					</div>
					<div class="form-group">					
						<button class="btn btn-primary">Editar</button>	
					</div>
				</form>
			</div>
		</div>		
	</section>
</main>