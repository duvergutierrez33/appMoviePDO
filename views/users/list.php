<main class="container">
	<section class="col-md-12 text-center my-4">
		<h1>Administración de Usuarios</h1>
	</section>

	<section class="mb-3 ml-3">
		<a href="?controller=user&method=new" class="btn btn-primary">Nuevo</a>	
	</section>

	<section class="col-md-12 table-responsive">
		<table class="table table-striped table-hover">			
			<thead class="thead-dark">
				<tr>					
					<th>Nombres</th>
					<th>Email</th>
					<th>Estado</th>
					<th>Rol</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user) : ?>
					<tr>
						<td><?php echo $user->name ?></td>
						<td><?php echo $user->email ?></td>
						<td><?php echo $user->statusName ?></td>
						<td><?php echo $user->roleName ?></td>
						<td>
							<a href="?controller=user&method=edit&id=<?php echo $user->id;?>" class="btn btn-secondary">Editar</a>
							<a href="?controller=user&method=delete&id=<?php echo $user->id;?>" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</section>
</main>