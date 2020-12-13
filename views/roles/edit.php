<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Editar Roles</h1>
	</section>	
	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Roles</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=role&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $role[0]->id; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ingrese su nombre" value="<?php echo $role[0]->name;  ?>">
					</div>
					<div class="form-group">
						<label>Estado</label>
						<select name="status_id" class="form-control">
							<option value="">Seleccione...</option>							
							<?php
								foreach($statuses as $status) {
									if($status->id == $role[0]->status_id)
										echo '<option selected value="'.$status->id.'">'.$status->name.'</option>';
									else
										echo '<option value="'.$status->id.'">'.$status->name.'</option>';

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