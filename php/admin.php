<?php
  session_start();
  include "conexion.php";
  if (!isset($_SESSION['correo'])) {
    echo '<script>
            alert("Por favor inicie sesión.");
            window.location = "iniciarSesion.php"
          </script>';
    die();
    session_destroy();
  }
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenido Admin!</title>
	<!--DATATABLES BOOTSTRAP-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<!--HOJA DE ESTILOS-->
	<link rel="stylesheet" href="../CSS/admin.css">
	<!--GOOGLE FONTS-->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!--FONTAWESOME-->
	<script src="https://kit.fontawesome.com/e0d5e5037e.js" crossorigin="anonymous"></script>
	<!--BOOTSTRAP 5-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<!--ICONO PAGINA-->
  <link rel="shortcut icon" href="../IMG/logo.jpeg">
    
    
</head>
<body>

	<div class="wrapper">
		<div class="sidebar">
			<h3>ADMIN</h3>
			<ul>
				<li><a href="#tabla-admin"><i class="fa-light fa-user-gear"></i> Administradores</a></li>
				<li><a href="#tabla-empresa"><i class="fa-light fa-city"></i> Empresas</a></li>
				<li><a href="#tabla-usuario"><i class="fa-light fa-user"></i> Personas</a></li>
			</ul>
		</div>

		<div class="main_content">
			<div class="header">
				<a href="cerrar_sesion.php" class="nav-link font-weight-bold text-align-end">Cerrar Sesión</a>
			</div>

			<section class="resume-section"><br>
				<?php
				$busqueda = $conexion->query('select * from admins');
  				$resultado = $busqueda->fetchAll(PDO::FETCH_ASSOC);
  				//print_r($datos);
  				if ($resultado > 0) {?>
				<div class="container">
					<div class="row">
						<div class="col">
							<table id="tabla-admin" class="table table-ligth table-hover table-striped table-bordered">
								<thead>
									<th>ID</th>
									<th>CORREO</th>
									<th>CLAVE</th>
									<th>ACCION</th>
								</thead>
								<?php 
								foreach($resultado as $res) {
								?>
								<tr>
									<td><?php echo $res["id"]; ?></td>
									<td><?php echo $res["correo"]; ?></td>
									<td><?php echo $res["clave"]; ?></td>
									<td>
										<center><a href="formActualizarAdmin.php?id=<?php echo $res["id"]; ?>">
											<i class="far fa-edit" style="color:green;"></i>
										</a>
										<a href="eliminarAdmin.php?id=<?php echo $res["id"]; ?>">
											<i class="far fa-trash-alt" style="color:red;"></i>
										</a></center>
									</td>
								</tr>
								<?php
								}
								?>
							</table>
						</div>
					</div>
				</div>
				<?php
				}else{
					echo "Sin resultados";
				}
				?>
			</section><br>
			<hr class="m-0" />

			<section class="resume-section">
				<?php
				$busqueda = $conexion->query('select * from empresa');
  				$resultado = $busqueda->fetchAll(PDO::FETCH_ASSOC);
  				//print_r($datos);
  				if ($resultado > 0) {?>
				<div class="container">
					<div class="row">
						<div class="col">
							<table id="tabla-empresa" class="table table-ligth table-hover table-striped table-bordered">
								<thead>
									<th>ID</th>
									<th>EMPRESA</th>
									<th>CORREO</th>
									<th>CLAVE</th>
									<th>ACCION</th>
								</thead>
								<?php 
								foreach($resultado as $res) {
								?>
								<tr>
									<td><?php echo $res["id"]; ?></td>
									<td><?php echo $res["empresa"]; ?></td>
									<td><?php echo $res["correo"]; ?></td>
									<td><?php echo $res["clave"]; ?></td>
									<td>
										<center><a href="formActualizarEmpresa.php?id=<?php echo $res["id"]; ?>">
											<i class="far fa-edit" style="color:green;"></i>
										</a>
										<a href="eliminarEmpresa.php?id=<?php echo $res["id"]; ?>">
											<i class="far fa-trash-alt" style="color:red;"></i>
										</a></center>
									</td>
								</tr>
								<?php
								}
								?>
							</table>
						</div>
					</div>
				</div>
				<?php
				}else{
					echo "Sin resultados";
				}
				?>
			</section><br>
			<hr class="m-0" />

			<section class="resume-section">
				<?php
				$busqueda = $conexion->query('select * from usuario');
  				$resultado = $busqueda->fetchAll(PDO::FETCH_ASSOC);
  				//print_r($datos);
  				if ($resultado > 0) {?>
				<div class="container">
					<div class="row">
						<div class="col">
							<table id="tabla-usuario" class="table table-ligth table-hover table-striped table-bordered">
								<thead>
									<th>ID</th>
									<th>NOMBRES</th>
									<th>APELLIDOS</th>
									<th>CORREO</th>
									<th>CLAVE</th>
									<th>ACCION</th>
								</thead>
								<?php 
								foreach($resultado as $res) {
								?>
								<tr>
									<td><?php echo $res["id"]; ?></td>
									<td><?php echo $res["nombres"]; ?></td>
									<td><?php echo $res["apellidos"]; ?></td>
									<td><?php echo $res["correo"]; ?></td>
									<td><?php echo $res["clave"]; ?></td>
									<td>
										<center><a href="formActualizarUsuario.php?id=<?php echo $res["id"]; ?>">
											<i class="far fa-edit" style="color:green;"></i>
										</a>
										<a href="eliminarUsuario.php?id=<?php echo $res["id"]; ?>">
											<i class="far fa-trash-alt" style="color:red;"></i>
										</a></center>
									</td>
								</tr>
								<?php
								}
								?>
							</table>
						</div>
					</div>
				</div>
				<?php
				}else{
					echo "Sin resultados";
				}
				?>
			</section><br>
			<hr class="m-0" />

		</div>
	</div>

	<!--SCRIPTS-->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

	<script src="../JS/adminDatatable.js"></script>

</body>
</html>