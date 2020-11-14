<!DOCTYPE html>
<html>
<head>
	<title>Registro de Clientes</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />

</head>
<body class="body_style">
	<center>
		<img class= "img_style" src="./Imagenes/cliente.png">
		<h1 class="slidein">Clientes</h1>
	</center>
	<?php
    	include ("registro.php");
    ?>s
	<center>
		<form method="post">
			<table>
				<tr>
					<td>
						<label class="style_busqueda">NIT</label>
					</td>
					<td>
						<input type="text" name="nit" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="style_busqueda">Nombre</label>
					</td>
					<td>
						<input type="text" name="nombre" size="50"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="style_busqueda">Apellido</label>
					</td>
					<td>
						<input type="text" name="apellido" size="50"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="style_busqueda">Dirección</label>
					</td>
					<td>
						<input type="text" name="direccion" size="80"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="style_busqueda">Teléfono</label>
					</td>
					<td>
						<input type="number" name="telefono" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						<label class="style_busqueda">Correo Electrónico</label>
					</td>
					<td>
						<input type="email" name="correo" size="50"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input class="boton3" type="submit" name="registro" value="Registrar"/>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>