<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Nueva Pelicula</h1>
	</section>	

	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Pelicula</h2>
			</div>

			<div class="card-body w-100">
				<!--<form action="?controller=movie&method=save" method="post"> -->
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" id="name" class="form-control" placeholder="Ingrese su nombre">
					</div>
					<div class="form-group">
						<label>Descripción</label>
						<input type="text" id="description" class="form-control" placeholder="">
					</div>					
					<div class="form-group">
						<label>Usuario</label>						
						<select id="user_id" class="form-control">
							<option value="">Seleccione...</option>							
							<?php
								foreach($users as $user) {
									echo '<option value="'.$user->id.'">'.$user->name.'</option>';
								}
							?>
						</select>
					</div>

					<div class="form-group row">
						<div class="col-md-8">							
							<label>Categorias</label>						
							<select id="category" class="form-control">
								<option value="">Seleccione...</option>							
								<?php
									foreach($categories as $category) {
										echo '<option value="'.$category->id.'">'.$category->name.'</option>';
									}
								?>
							</select>
						</div>
						<div class="col-md-4 mt-4">
							<button id="addElement" class="btn btn-secondary">Agregar</button>
						</div>
					</div>

					<div id="categories-list"></div>

					<div class="form-group">					
						<button class="btn btn-primary" id="submit">Guardar</button>	
					</div>
				<!--</form>-->
			</div>
		</div>		
	</section>
</main>

<script src="assets/js/movie.js"></script>