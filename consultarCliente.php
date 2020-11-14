

<?php
	//Incluimos la clase conexion
    include ("conexion.php");
    if(isset($_POST["consultar"])){
    	//Validamos lo datos ingresados en el formulario
        if (strlen($_POST['nit']) >= 1){
        	//Asignamos los datos del formulario a variables locales
        	$nit = $_POST['nit'];
        	//Definimos la consulta sql y la ejecutamos
            $sql = "select nit_cliente, nombre, apellido, direccion, telefono, correo from almacen.cliente where nit_cliente = '$nit'";
            $resultado = mysqli_query($conexion, $sql);
            //Validamos el resultado de la consulta
            if(!$resultado){
            	echo'<script type="text/javascript">
					alert("El nit ingresado no existe");
	                window.location.href="consultaCliente.php";
	                </script>';
            } else {
            	while($resultSet = mysqli_fetch_array($resultado)){ 
            		?>

            	<!DOCTYPE html>
            	<html>
            	<head>
            		<meta charset="utf-8">
            		<title>Muestra de Consulta</title>
            		<link rel="stylesheet" type="text/css" href="styles.css" />
            	</head>
            	<body class="body_style">
            		<center>
            			<img class= "img_style" src="./Imagenes/clientes3.png">
						<h1 class="slidein">Resultado_Busqueda</h1>

    					<form action="actualizar.php" method="post">
					    

							<div>								
								<input type="hidden" name="nit" id="nit" value="<?php echo $resultSet['nit_cliente'] ?>">
							</div>
							<div>
								<label class="label_style">Nombre</label>
							</div>
							<div>
								<input class="input_style" type="text" name="nombre" id="nombre" value="<?php echo $resultSet['nombre'] ?>">
							</div>
							<div>
								<label class="label_style">Apellido</label>
							</div>
							<div>
								<input type="text" name="apellido" id="apellido" value="<?php echo $resultSet['apellido'] ?>">
							</div>
							<div>
								<label class="label_style">Direccion</label>
							</div>
							<div>
								<input class="input_style" type="text" name="direccion" id="direccion" value="<?php echo $resultSet['direccion'] ?>">        
							</div>
							<div>
								<label class="label_style">Telefono</label>
							</div>
							<div>
								<input class="input_style" type="text" name="telefono" id="telefono" value="<?php echo $resultSet['telefono'] ?>">
							</div>
							<div>
								<label class="label_style">Correo</label>
							</div>
							<div>
								<input class="input_style" type="text" name="correo" id="correo" value="<?php echo $resultSet['correo'] ?>">                
							</div>	
							<div>.</div>												
							<div>
								<input class="boton3" type="submit" name="modificar"  value="Modificar">
							</div>	
							
							
                            </form>
							<?php
								}
							?>
						</table>
            		</center>
            	</body>
            	</html>
            	<?php
            }
        }
    }
?>