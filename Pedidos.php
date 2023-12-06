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
<form class="form-horizontal" method="POST" action="guardar2.php" autocomplete="on" class="was-validated">
<div class="container">
    <div class="row">
                    <h1 class="text-left">Pedidos de Agua</h1>
                </div>
                <div class="mt-5 text-center">
                <div class="form-group">
                    <div class="col-md-12"><label class="labels" >Nombre</label>
                    <input type="text" class="form-control"  name="Nombre" placeholder="Nombre del Cliente" value=""  required></div>
<div class="col-md-12">
                    <label  class="labels">Fecha</label><input type="date" class="form-control" name="Fecha" value=" de Noviembre" placeholder="">
                </div>
                    <div class="form-group">
                    <select class="custom-select mt-3" name="Lugar"  style="width:280px;" required >
        <option selected="">Lugar</option>
        <option value="La uno">La uno</option>
        <option value="Mangitos">Mangitos</option>
        <option value="San Diego">San Diego</option>
        <option value="Mirador">Mirador</option>
        <option value="Laureles">Laureles</option>
        <option value="Jaltocan">Jaltocan</option>
    </select></div>
                    
                    
                    <div class="col-md-12"><label class="labels">Hora</label>
                    <input type="text" class="form-control" name="HORA" placeholder="AM o PM" value="" required></div>
                    
                    <div class="col-md-12"><label class="labels">Costo</label>
                    <input type="text" class="form-control" name="COSTO" placeholder="" value="$100"></div>

                    <div class="col-md-12"><label class="labels">Telefono</label>
                    <input type="text" class="form-control" name="Telefono" placeholder="ingresa el telefono del cliente" value="" ></div>
                </div>
                </div></div></div></div>
            
             
                </div>

                <div class="mt-5 text-center"><button class="btn btn-success profile-button" type="submit">Enviar Registro</button></div>
<div class="container">
    <div class="row">

                <a href="register.php"  class="btn btn-primary">Regresar</a>
                </button></div>
            </div>
        </div>
    
    </div>
</div>

</div> 
            
                        </body>
</html>
<!--container end.//-->
