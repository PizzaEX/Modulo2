<html lang="es">

<body>

<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
<!------ Include the above in your HEAD tag ---------->
 <style>

     body {
  background-image: url('902946.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style> 
<!-- // llamadas para los iconos -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> 
<!-- // cierres de las llamadas para los iconos -->
<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="on">
<div class="container">
    <div class="row">
                    <h1 class="text-left">Cargas de Agua</h1>
                </div>
                <div class="mt-5 text-center">
                    <a href="index.php" class="btn btn-danger">regresar</a>
                <a href="Pedidos.php" class="btn btn-danger">Nuevo Pedido</a>
                <a href="mostrarRegistro.php" class="btn btn-Primary">Pedidos del Dia</a>
                <a href="mostrarRegistro2.php" class="btn btn-warning">Registro de Pedidos del Despacho</a>
                <div class="form-group">
                <div class="col-md-12">
                    <label  class="labels">Viajes</label><input type="text" class="form-control" name="viajes" value="1" placeholder="">
                </div>
                <div class="col-md-12"><label class="labels">Nombre</label></div>
                    <select class="custom-select mt-3" name="Nombre"  style="width:280px;" required >
        <option value="Alan">Alan</option>
        <option value="Gerardo">Gerardo</option>
        <option value="Gema">Gema</option>
        <option value="Manuel">Manuel</option>
        <option value="Blanca">Blanca</option>
        
    </select></div>
                    
                    <div class="col-md-12">
                    <label  class="labels">Fecha</label><input type="date" class="form-control" name="Fecha" value="" placeholder="">
                </div>
                </div>
    
    
                <div class="col-md-12"><label class="labels">Compania</label>
                    <select class="custom-select mt-2" name="Carga"  style="width:230px;" required >
        <option value="Solo">Solo</option>
        <option value="Con Gerardo">Con Gerardo</option>
        <option value="Con Alan">Con Alan</option>
        <option value="Con Gema">Con Gema</option>
        <option value="Con Manuel">Con Manuel</option>
        <option value="Con Blanca">Con Blanca</option>
        
    </select></div></div>
    <div class="container">
    <div class="row">
                    <div class="col-md-12"><label class="labels">Pagado</label><input type="text" name="Pagado" class="form-control" placeholder="" value="Pagado"></div>
                    <div class="col-md-12"><label class="labels">Entregado</label><input type="text" class="form-control" name="Entregado" placeholder="" value="Entregado"></div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><label class="labels">Deudas</label><input type="text" class="form-control" name="Deuda" placeholder="" value="$0"></div>
                    <div class="col-md-12"><label class="labels">Cliente</label><input type="text" class="form-control" name="Cliente" value="" placeholder=""></div>
                    <div class="col-md-12"><label class="labels">Precio del Viaje</label><input type="text" class="form-control" name="Total" placeholder="" value="$100"></div>
                      <div class="col-md-12"><label class="labels">Ganancia de Cargas</label>
                    <select class="custom-select mt-2" name="Ganancias"  style="width:230px;" required >
        <option value="$30">$30</option>
        <option value="$15">$15</option>
    </select></div></div>
                </div>
                </div>

                <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="submit">Enviar Registro</button></div>
            </div>
        </div>
    
    </div>
</div>

</div> 
            
                        </body>
</html>
<!--container end.//-->
