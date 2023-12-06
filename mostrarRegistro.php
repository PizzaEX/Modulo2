<?php

require 'conexion.php';

$query = "SELECT * FROM pedidos";

$resultado = $mysqli->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
<table class="table table-withe">
    <div class="row"></div>
    <a href="register.php" class="btn btn-primary">Regresar</a> <a href="Pedidos.php" class="btn btn-danger">Nuevo Pedido</a>
    <!-- <a href="mostrarRegistro2.php" class="btn btn-warning">Noviembre</a>
    <a href="register.php" class="btn btn-warning">Diciembre</a>
  -->
  <h1 class="text-left">nuevos Pedidos del Dia</h1>
    <thead>
      <tr>
        <th>Nombre del Cliente</th>
        <th>Fecha</th>
        <th>Lugar</th>
        <th>Hora</th>
        <th>Costo</th>
        <th>telefono</th>

      </tr>

    </thead>
    <tbody>
      <tr>

      	<?php
while ($row = $resultado->fetch_assoc()) {
    # code...

    ?>

<td><?php echo $row["Nombre"]; ?></td>
<td><?php echo $row["Fecha"]; ?></td>
<td><?php echo $row["Lugar"]; ?></td>
<td><?php echo $row["HORA"]; ?></td>
<td><?php echo $row["COSTO"]; ?></td>
<td><?php echo $row["Telefono"]; ?></td>




<!--

      
     -->
      </tr>

<!--
-->


<?php
}
?>



    </tbody>
  </table>
</div>

</body>
 
</html>
