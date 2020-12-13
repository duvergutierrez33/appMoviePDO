<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Editar Estados</h1>
	</section>	
	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Estados</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=status&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $status[0]->id; ?>">

					<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control" placeholder="Ingrese su nombre" value="<?php echo $status[0]->name;  ?>">
					</div>
					<div class="form-group">
						<label>Tipo de Estado</label>
						<select name="type_status_id " class="form-control">
							<option value="">Seleccione...</option>							
							<?php
								foreach($typeStatuses as $typeStatus) {
									if($typeStatus->id == $status[0]->type_status_id)
										echo '<option selected value="'.$typeStatus->id.'">'.$typeStatus->name.'</option>';
									else
										echo '<option value="'.$typeStatus->id.'">'.$typeStatus->name.'</option>';

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