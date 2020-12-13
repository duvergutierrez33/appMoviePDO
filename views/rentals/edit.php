<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Editar Alquiler</h1>
	</section>	
	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Alquiler</h2>
			</div>

			<div class="card-body w-100">
				<form action="?controller=rental&method=update" method="post">

					<input type="hidden" name="id" value="<?php echo $rental[0]->id; ?>">

					<div class="form-group">
						<label>Fecha Inicial</label>
						<input type="date" name="start_date" class="form-control" placeholder="Ingrese su nombre" value="<?php echo $rental[0]->start_date;  ?>">
					</div>
					<div class="form-group">
						<label>Fecha Final</label>
						<input type="date" name="end_date" class="form-control" placeholder="Ingrese su nombre" value="<?php echo $rental[0]->end_date;  ?>">
					</div>
					<div class="form-group">
						<label>Total</label>
						<input type="number" name="total" class="form-control" placeholder="" value="<?php echo $rental[0]->total; ?>">
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
						<label>Usuario</label>
						<select name="status_id" class="form-control">
							<option value="">Seleccione...</option>							
							<?php
								foreach($statuses as $status) {
									if($status->id == $rental[0]->status_id)
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