<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AppPeliculas</title>
	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="?controller=welcome&method=home">Inicio</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">		      
		      <li class="nav-item">
		        <a class="nav-link" href="?controller=user">Usuarios</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?controller=movie">Peliculas</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?controller=rental">Alquileres</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?controller=role">Roles</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?controller=status">Estados</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?controller=category">Categorias</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?controller=typeStatus">Tipo de Estado</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="?controller=welcome">Cerrar Sesión</a>
		      </li>
		    </ul>		    
		  </div>
		</nav>
	</header>	

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>