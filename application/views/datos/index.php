<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenido a CodeIgniter</title>
</head>
<body>

<div id="container">
	<h4><?php echo $titulo ?></h4>

	<form id="datos" method="POST" name="datos" action="<?php echo base_url();  ?>index.php/datos/registrar">
		Nombre <input type="text" name="nombre"><br />
		Telefono <input type="text" name="telefono"><br />
		Correo Electronico <input type="text" name="email"><br />

		<input type="submit" value="registra">
	</form>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Telefono</th>
				<th>Correo electronico</th>
			</tr>
		</thead>
	</table>
</div>
</body>
</html>