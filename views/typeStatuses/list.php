<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Administración de Tipos de Estado</h1>
	</section>

	<section class="mb-3 ml-3">
		<a href="?controller=typestatus&method=new" class="btn btn-primary">Nuevo</a>	
	</section>

	<section class="col-md-12 table-responsive">
		<table class="table table-striped table-hover">			
			<thead class="thead-dark">
				<tr>					
					<th>Id</th>					
					<th>Nombre</th>					
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($typeStatuses as $typeStatus) : ?>
					<tr>
						<td><?php echo $typeStatus->id?></td>

						<td><?php echo $typeStatus->name ?></td>
						<td>
							<a href="?controller=typeStatus&method=edit&id=<?php echo $typeStatus->id;?>" class="btn btn-secondary">Editar</a>
							<a href="?controller=typeStatus&method=delete&id=<?php echo $typeStatus->id;?>" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</section>
</main>