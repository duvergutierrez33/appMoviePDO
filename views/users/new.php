<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Nuevo Usuario</h1>
	</section>	

	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Usuario</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=user&method=save" method="post">
					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ingrese su nombre completo">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Ingrese su correo electrónico">
					</div>
					<div class="form-group">
						<label>Contraseña</label>
						<input type="password" name="password" class="form-control" placeholder="****">
					</div>
					<div class="form-group">
						<label>Rol</label>						
						<select name="role_id" class="form-control">
							<option value="">Seleccione...</option>							
							<?php
								foreach($roles as $role) {
									echo '<option value="'.$role->id.'">'.$role->name.'</option>';
								}
							?>
						</select>
					</div>
					<div class="form-group">					
						<button class="btn btn-primary">Guardar</button>	
					</div>
				</form>
			</div>
		</div>		
	</section>
</main>