<?php
	
	require 'conexion.php';
	
	$Nombre = $_POST['Nombre'];
	$Fecha = $_POST['Fecha'];
	$Lugar = $_POST['Lugar'];
	$HORA = $_POST['HORA'];
	$COSTO = $_POST['COSTO'];
	$Telefono = $_POST['Telefono'];
	
	
	
	
	$sql = "INSERT INTO pedidos (Nombre,Fecha,Lugar,HORA,COSTO,Telefono) VALUES ('$Nombre', '$Fecha','$Lugar','$HORA','$COSTO','$Telefono')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="register.php" class="btn btn-info">Regresar</a>
						 <style>
body {
  background-image: url('58523401.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
				</div>
			</div>
		</div>
	</body>
</html>
