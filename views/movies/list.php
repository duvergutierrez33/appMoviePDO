<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Administración de Peliculas</h1>
	</section>

	<section class="mb-3 ml-3">
		<a href="?controller=movie&method=new" class="btn btn-primary">Nuevo</a>	
	</section>

	<section class="col-md-12 table-responsive">
		<table class="table table-striped table-hover">			
			<thead class="thead-dark">
				<tr>					
					<th>Nombre</th>
					<th>Desripción</th>
					<th>Estado</th>
					<th>Usuario</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($movies as $movie) : ?>
					<tr>
						<td><?php echo $movie->name ?></td>
						<td><?php echo $movie->description ?></td>
						<td><?php echo $movie->statusName ?></td>
						<td><?php echo $movie->userName ?></td>
						<td>
							<a href="?controller=movie&method=edit&id=<?php echo $movie->id;?>" class="btn btn-secondary">Editar</a>
							<a href="?controller=movie&method=delete&id=<?php echo $movie->id;?>" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</section>
</main>