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
   <?php

require 'conexion.php';

$query = "SELECT * FROM agua";

$resultado = $mysqli->query($query);

?>
<div class="container">
    <div class="row">
 <a href="register.php" class="btn btn-primary">Regresar</a> <a href="Pedidos.php" class="btn btn-danger">Nuevo Pedido</a>
    <!-- <a href="mostrarRegistro2.php" class="btn btn-warning">Noviembre</a>
    <a href="register.php" class="btn btn-warning">Diciembre</a>
-->
<div class="container">
<div class="row"> </div>
<h1 class="text-left">Registro de despacho</h1>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Total de Viajes</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Entregado</th>
        <th>Cliente</th>
        <th>Total</th>
        <th>Ganancias del Dia</th>
        <th>Carga</th>
        <th>Pagado</th>
        <th>Deuda</th>
       

      </tr>
    </thead>
    
    <tbody>
      <tr>

      	<?php
while ($row = $resultado->fetch_assoc()) {
    # code...

    ?>
<td><?php echo $row["viajes"]; ?></td>
<td><?php echo $row["Nombre"]; ?></td>
<td><?php echo $row["Fecha"]; ?></td>
<td><?php echo $row["Carga"]; ?></td>
<td><?php echo $row["Cliente"]; ?></td>
<td><?php echo $row["Total"]; ?></td>
<td><?php echo $row["Ganancias"]; ?></td>
<td><?php echo $row["Carga"]; ?></td>
<td><?php echo $row["Pagado"]; ?></td>
<td><?php echo $row["Deuda"]; ?></td>

      </tr>

<?php
}
?>
    </tbody>
  </table>
</div>

</body>
</html>