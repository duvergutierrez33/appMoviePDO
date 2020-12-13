<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Administración de Alquileres</h1>
	</section>

	<section class="mb-3 ml-3">
		<a href="?controller=rental&method=new" class="btn btn-primary">Nuevo</a>	
	</section>

	<section class="col-md-12 table-responsive">
		<table class="table table-striped table-hover">			
			<thead class="thead-dark">
				<tr>					
					<th>Total</th>
					<th>Usuario</th>
					<th>Estado</th>
					<th>Fecha Inicial</th>
					<th>Fecha Final</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($rentals as $rental) : ?>
					<tr>
						<td><?php echo $rental->total ?></td>
						<td><?php echo $rental->userName ?></td>
						<td><?php echo $rental->statusName ?></td>
						<td><?php echo $rental->start_date ?></td>
						<td><?php echo $rental->end_date ?></td>
						<td>
							<a href="?controller=rental&method=edit&id=<?php echo $rental->id;?>" class="btn btn-secondary">Editar</a>
							<a href="?controller=rental&method=delete&id=<?php echo $rental->id;?>" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</section>
</main>