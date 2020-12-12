<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Administración de Roles</h1>
	</section>

	<section class="mb-3 ml-3">
		<a href="?controller=role&method=new" class="btn btn-primary">Nuevo</a>	
	</section>

	<section class="col-md-12 table-responsive">
		<table class="table table-striped table-hover">			
			<thead class="thead-dark">
				<tr>					
					<th>Nombre</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($roles as $role) : ?>
					<tr>
						<td><?php echo $role->name ?></td>
						<td><?php echo $role->status_id ?></td>
						<td>
							<a href="?controller=role&method=edit&id=<?php echo $role->id;?>" class="btn btn-secondary">Editar</a>
							<a href="?controller=role&method=delete&id=<?php echo $role->id;?>" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</section>
</main>