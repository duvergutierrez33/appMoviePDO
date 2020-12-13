<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Administración de Estados</h1>
	</section>

	<section class="mb-3 ml-3">
		<a href="?controller=status&method=new" class="btn btn-primary">Nuevo</a>	
	</section>

	<section class="col-md-12 table-responsive">
		<table class="table table-striped table-hover">			
			<thead class="thead-dark">
				<tr>					
					<th>Nombre</th>
					<th>Tipo de Estado</th>					
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($statuses as $status) : ?>
					<tr>
						<td><?php echo $status->name ?></td>
						<td><?php echo $status->typeStatusName ?></td>
						<td>
							<a href="?controller=status&method=edit&id=<?php echo $status->id;?>" class="btn btn-secondary">Editar</a>
							<a href="?controller=status&method=delete&id=<?php echo $status->id;?>" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</section>
</main>