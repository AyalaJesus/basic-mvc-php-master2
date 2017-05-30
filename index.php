<?php
	include_once("controllers/ProductsController.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pizza</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- my css file -->
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <!-- header -->
    <header>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="./empleado.php">Empleados</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <div class="video-container">
      <video class="video" src="./public/video.mp4" autoplay loop="">
      </video>
    </div>

    <!-- cliente inicio -->
  <div class="video-container vertical-center" id="registroCliente" style="visibility: visible">
      <div class="front absolute card col-xs-12">
        <h2 class ="white-text"><center>Ingresa tus datos </center></h2>
        <input type="text" class="form-control" id="cliente" value="" placeholder="Ingresa tu nombre" required><br>
    <input type="text" class="form-control" id="direccion" value="" placeholder="Ingresa tu direccion" required><br>
    <input type="text" class="form-control" id="telefono" value="" placeholder="Ingresa tu telefono" required><br>
        <button type="button" class="form-control" id="guardarP" >Continuar</button>
      </div>
    </div>

    <!-- clientes -->
  <script src="./assets/js/scriptP.js" charset="utf-8"></script>
  <script type="text/javascript">
    let guardarP = document.querySelector("#guardarP");
    guardarP.addEventListener('click',function(){
    let nombre = document.querySelector("#cliente");
    let direccion = document.querySelector("#direccion");
    let telefono = document.querySelector("#telefono");
    var dist = document.getElementById("cliente").value;
        let pedido = new Pedido(nombre.value,direccion.value,telefono.value);
        let listapedidos = new Array();
        listapedidos.push(pedido);
        let arregloJSON = JSON.stringify(listapedidos);
        console.log(arregloJSON);
        
        $.ajax({
          method: "POST",
          url: "controllers/PedidosController.php",
          data: { pedidos: arregloJSON, funcion: "insertarPedidos" }
        })
        .done(function() {
           console.log( "Datos guardados ");
           window.location.href="./Catalogos.php?usuario="+nombre.value;
         });
      });
    </script>
  </body>
</html>