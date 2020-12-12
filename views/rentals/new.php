<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Nuevo Alquiler</h1>
	</section>	

	<section class="row mt-2">
		<!-- Test Line Comment -->
		<div class="card w-50 m-auto">
			<div class="card-header container">
				<h2>Información Alquiler</h2>
			</div>
			<div class="card-body w-100">
				<form action="?controller=rental&method=save" method="post">
					<div class="form-group">
						<label>Fecha Inicial</label>
						<input type="date" name="start_date" class="form-control" placeholder="Ingrese fecha">
					</div>
					<div class="form-group">
						<label>Fecha Final</label>
						<input type="date" name="end_date" class="form-control" placeholder="ingrese fecha">
					</div>
					<div class="form-group">
						<label>Total</label>
						<input type="number" name="total" class="form-control" placeholder="ingrese cantidad">
					</div>					
					<div class="form-group">
						<label>Usuario</label>						
						<select name="user_id" class="form-control">
							<option value="">Seleccione...</option>							
							<?php
								foreach($users as $user) {
									echo '<option value="'.$user->id.'">'.$user->name.'</option>';
								}
							?>
						</select>
					</div>
					
					<div class="form-group">
							<label>Estado</label>						
							<select name="status_id" class="form-control">
								<option value="">Seleccione...</option>							
								<?php
									foreach($statuses as $status) {
										echo '<option value="'.$status->id.'">'.$status->name.'</option>';
									}
								?>
							</select>
					</div>

					<div class="form-group">					
						<button class="btn btn-primary" id="submit">Guardar</button>	
					</div>
				<!--</form>-->
			</div>
		</div>		
	</section>
</main>
