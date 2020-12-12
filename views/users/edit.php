<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Editar Usuario</h1>
	</section>	
	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Usuario</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=user&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $user[0]->id; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ingrese su nombre completo" value="<?php echo $user[0]->name;  ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Ingrese su correo electrónico" value="<?php echo $user[0]->email; ?>">
					</div>					
					<div class="form-group">
						<label>Rol</label>
						<select name="role_id" class="form-control">
							<option value="">Seleccione...</option>							
							<?php
								foreach($roles as $role) {
									if($role->id == $user[0]->role_id)
										echo '<option selected value="'.$role->id.'">'.$role->name.'</option>';
									else
										echo '<option value="'.$role->id.'">'.$role->name.'</option>';

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