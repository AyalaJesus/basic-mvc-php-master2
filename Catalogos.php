<?php
	include_once("controllers/ProductsController.php");
	include_once("controllers/PedidosController.php");
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
    <script src="./assets/js/scriptC.js" charset="utf-8"></script>

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
              <li><a href="#">Link</a></li>
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
		
	<div class="video-container vertical-center" id="Confirmar" style="visibility: hidden">
      <div class="front absolute card col-xs-12">
        <h2 class ="white-text"><center>Confirma tu direccion </center></h2>
		<?php
					foreach ($cliente as $aux) {
				?>
						<option value="" id="piz2"><?php echo $aux['nombre']; ?></option>
				<?php
					}
				?>
        <input type="text" class="form-control" id="direccion2" value="" placeholder="Ingresa tu direccion" required><br>
        <button type="button" class="form-control" id="pedir" >Confirmar</button>
		<br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
      </div>
    </div>


  <div class="video-container vertical-center" id="ListaCarrito" style="visibility: visible">
      <div class="front absolute card col-xs-12">
        <h2 class ="white-text"><center>Carrito</center></h2>
        <center><label class ="white-text" type="text" value="" id="usuarioFinal"><?php echo $_GET["usuario"]; ?></label></center><br>
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div id="tabla-clasificacion">
                <table class ="white-text table">
                  <thead>
                    <th>ID producto</th>
                    <th>Cantidad</th>
					<th>Precio</th>
                  </thead>
                  <tbody id="lista-pedidos">
                  </tbody>
                </table>
				<label class="white-text">Total  </label>
				  <label class="white-text" id="lista-total"></label>
              </div>
              <button class="form-control" type="button" id="mostrar-tabla">Mostrar pedido</button><br>
            </div>
          </div>
        </div><br>
        <button type="button" class="form-control" id="" onclick="Validar()" >Realizar Pedido</button>
      </div>
    </div>
	
	<!-- Productos -->
	<div class="video-container" id="CatalogoProductos" style="visibility: visible">
	  <table>
	  <tr>
		<th><h3 class ="white-text"><center>Selecciona tu orden</center></h3><br></th>
	  </tr>
	  <tr>
		<td><div class="card1 col-xs-12" id="verPizzas" ><br>
			<center><img src="./public/cate1.jpg" WIDTH=150 HEIGHT=150></center><br>
			<select class="form-control" name="" id="piz" value="que pasa">
				<?php
					foreach ($productosPi as $producto) {
				?>
						<option value="" id="piz2"><?php echo $producto['nombre']; ?></option>
				<?php
					}
				?>
			</select><br>
			<button type="button" class="form-control" onclick="verCaracteristicasPizza()">Ver</button>
		  </div>
		</td>
		<td><div class="card2 col-xs-12" id="verEnsaladas"><br>
			<center><img src="./public/cate2.jpg" WIDTH=150 HEIGHT=150></center><br>
			<select class="form-control" name="" id="Ens" value="que pasa">
				<?php
					foreach ($productosPa as $producto) {
				?>
						<option value="" id="piz2"><?php echo $producto['nombre']; ?></option>
				<?php
					}
				?>
			</select><br>
			<button type="button" class="form-control" onclick="verCaracteristicasEnsaladas()">Ver</button>
		  </div>
		</td>
		</tr><tr>
		<td><div class="card3 col-xs-12" id="verPastas"><br>
			<center><img src="./public/cate3.jpg" WIDTH=150 HEIGHT=150></center><br>
			<select class="form-control" name="" id="Pas" value="que pasa">
				<?php
					foreach ($productosEn as $producto) {
				?>
						<option value="" id="piz2"><?php echo $producto['nombre']; ?></option>
				<?php
					}
				?>
			</select><br>
			<button type="button" class="form-control" id="ver" onclick="verCaracteristicasPastas()">Ver</button>
		  </div></td>
		<td><div class="card4 col-xs-12" id="verBebidas"><br>
			<center><img src="./public/cate4.jpg" WIDTH=150 HEIGHT=150></center><br>
			<select class="form-control" name="" id="Beb" value="que pasa">
				<?php
					foreach ($productosBe as $producto) {
				?>
						<option value="" id="piz2"><?php echo $producto['nombre']; ?></option>
				<?php
					}
				?>
			</select><br>
			<button type="button" class="form-control" id="ver" onclick="verCaracteristicasBebidas()">Ver</button>
		  </div></td>
	  </tr>
	  <tr>
		<th><br><center><button type="button" class="form-control" id="ver" onclick="volver()">Cancelar</button></center></th>
	  </tr>
	</table>
    </div>
	
	
	
	
	<!-- Hawaiana -->
    <div class="video-container vertical-center" id="CaracteristicasHa" style="visibility: hidden">
	<form id="nuevo-articulo1" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos1 as $producto) {
          ?>
              <label class ="white-text">Pizza</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>
	 
   <!-- Mexicanas -->
    <div class="video-container vertical-center" id="CaracteristicasMe" style="visibility: hidden">
      <form id="nuevo-articulo2" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos2 as $producto) {
          ?>
              <label class ="white-text">Pizza</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre2" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion2" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio2" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad2" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>

    <!-- pepperoni -->
    <div class="video-container vertical-center" id="CaracteristicasPe" style="visibility: hidden">
      <form id="nuevo-articulo3" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos3 as $producto) {
          ?>
              <label class ="white-text">Pizza</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre3" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion3" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio3" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad3" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>

    <!-- Carne -->
    <div class="video-container vertical-center" id="CaracteristicasCa" style="visibility: hidden">
      <form id="nuevo-articulo4" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos4 as $producto) {
          ?>
              <label class ="white-text">Pizza</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre4" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion4" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio4" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad4" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>
	
	
	<!-- Casa -->
    <div class="video-container vertical-center" id="CaracteristicasCas" style="visibility: hidden">
      <form id="nuevo-articulo5" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos5 as $producto) {
          ?>
              <label class ="white-text">Ensalada</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre5" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion5" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio5" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad5" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>
	 
   <!-- Frutos -->
    <div class="video-container vertical-center" id="CaracteristicasFr" style="visibility: hidden">
      <form id="nuevo-articulo6" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos6 as $producto) {
          ?>
              <label class ="white-text">Ensalada</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre6" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion6" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio6" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad6" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>

    <!-- Brocolli -->
    <div class="video-container vertical-center" id="CaracteristicasBr" style="visibility: hidden">
      <form id="nuevo-articulo7" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos7 as $producto) {
          ?>
              <label class ="white-text">Ensalada</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre7" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion7" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio7" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad7" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>

    <!-- Manzana -->
    <div class="video-container vertical-center" id="CaracteristicasMa" style="visibility: hidden">
      <form id="nuevo-articulo8" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos8 as $producto) {
          ?>
              <label class ="white-text">Ensalada</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre8" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion8" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio8" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad8" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>
	
	
	<!-- Mariscos -->
    <div class="video-container vertical-center" id="CaracteristicasMar" style="visibility: hidden">
      <form id="nuevo-articulo9" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos9 as $producto) {
          ?>
              <label class ="white-text">Pasta</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre9" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion9" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio9" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad9" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>
	 
   <!-- Mexicanas -->
    <div class="video-container vertical-center" id="CaracteristicasAr" style="visibility: hidden">
      <form id="nuevo-articulo10" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos10 as $producto) {
          ?>
              <label class ="white-text">Pasta</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre10" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion10" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio10" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad10" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>

    <!-- pepperoni -->
    <div class="video-container vertical-center" id="CaracteristicasIt" style="visibility: hidden">
      <form id="nuevo-articulo11" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos11 as $producto) {
          ?>
              <label class ="white-text">Pasta</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre11" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion11" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio11" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad11" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>

    <!-- Carne -->
    <div class="video-container vertical-center" id="CaracteristicasVe" style="visibility: hidden">
      <form id="nuevo-articulo12" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos12 as $producto) {
          ?>
              <label class ="white-text">Pasta</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre12" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion12" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio12" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad12" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>
	
	
	<!-- Mariscos -->
    <div class="video-container vertical-center" id="CaracteristicasCo" style="visibility: hidden">
      <form id="nuevo-articulo13" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos13 as $producto) {
          ?>
              <label class ="white-text">Bebidas</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre13" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion13" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio13" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad13" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>
	 
   <!-- Mexicanas -->
    <div class="video-container vertical-center" id="CaracteristicasPep" style="visibility: hidden">
      <form id="nuevo-articulo14" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos14 as $producto) {
          ?>
              <label class ="white-text">Bebidas</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre14" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion14" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio14" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad14" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>

    <!-- pepperoni -->
    <div class="video-container vertical-center" id="CaracteristicasMu" style="visibility: hidden">
      <form id="nuevo-articulo15" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos15 as $producto) {
          ?>
              <label class ="white-text">Bebidas</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre15" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion15" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio15" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad15" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>

    <!-- Carne -->
    <div class="video-container vertical-center" id="CaracteristicasSp" style="visibility: hidden">
      <form id="nuevo-articulo16" class="front absolute card col-xs-12" >
        <?php
            foreach ($productos16 as $producto) {
          ?>
              <label class ="white-text">Bebidas</label><br>
               <input type="hidden" class="form-control" name="" id="usuario" value="<?php echo $_GET['usuario']; ?>"><br>
               <input type="text" class="form-control" name="" id="nombre16" disabled="true" value="<?php echo $producto['nombre']; ?>"><br>
               <label class ="white-text">Descripción</label><br>
               <input type="text" class="form-control" name="" id="descripcion16" disabled="true" value="<?php echo $producto['descripcion']; ?>"><br>
               <label class ="white-text">Precio</label><br>
               <input type="text" class="form-control" name="" id="precio16" disabled="true" value="<?php echo $producto['precio']; ?>"><br>
               <label class ="white-text">Cantidad</label><br>
               <input type="number" class="form-control" id="cantidad16" placeholder="Agrega una cantidad" min="1"  required><br>
          <?php
            }
          ?>
        <button type="submit" class="form-control" onclick="cerrar1()" >Agregar a la lista</button>
        <br><center><button type="button" class="form-control" onclick="cerrar()">Cerrar</button></center>
	</form>
    </div>
	
	<script type="text/javascript">
      function cerrar1(){
		alert("Agregado al carrito");
		cerrar();
      };
    </script>

    <script type="text/javascript">
      function cerrar(){
		document.getElementById("CaracteristicasHa").style.visibility = "hidden";
		document.getElementById("CaracteristicasMe").style.visibility = "hidden";
		document.getElementById("CaracteristicasPe").style.visibility = "hidden";
		document.getElementById("CaracteristicasCa").style.visibility = "hidden";
		document.getElementById("CaracteristicasCas").style.visibility = "hidden";
		document.getElementById("CaracteristicasFr").style.visibility = "hidden";
		document.getElementById("CaracteristicasBr").style.visibility = "hidden";
		document.getElementById("CaracteristicasMa").style.visibility = "hidden";
		document.getElementById("CaracteristicasMar").style.visibility = "hidden";
		document.getElementById("CaracteristicasVe").style.visibility = "hidden";
		document.getElementById("CaracteristicasIt").style.visibility = "hidden";
		document.getElementById("CaracteristicasAr").style.visibility = "hidden";
		document.getElementById("CaracteristicasCo").style.visibility = "hidden";
		document.getElementById("CaracteristicasPep").style.visibility = "hidden";
		document.getElementById("CaracteristicasMu").style.visibility = "hidden";
		document.getElementById("CaracteristicasSp").style.visibility = "hidden";
		document.getElementById("ListaCarrito").style.visibility = "visible";
		document.getElementById("Confirmar").style.visibility = "hidden";
      };
    </script>
	
    <script>
	function volver() {
	    document.location.href = "./index.php";
	}
	</script>
	
	<script type="text/javascript">
	function Validar() {
		/*alert(document.getElementById("lista-total"));
		if(document.getElementById("lista-total").value == "0")
		{
    		alert("vacio");
		}*/
		
	    document.getElementById("ListaCarrito").style.visibility = "hidden";
		document.getElementById("Confirmar").style.visibility = "visible";
	}
	</script>

	<script type="text/javascript">
      function verCaracteristicasPizza(){
      	var combo = document.getElementById("piz");
		var selected = combo.options[combo.selectedIndex].text;
		cerrar();
		document.getElementById("ListaCarrito").style.visibility = "hidden";
		if(selected == "Pizza hawaiana")
		{
    		document.getElementById("CaracteristicasHa").style.visibility = "visible";
		}
		if(selected == "Pizza mexicana")
		{
    		document.getElementById("CaracteristicasMe").style.visibility = "visible";
		}
		if(selected == "Pizza pepperoni")
		{
    		document.getElementById("CaracteristicasPe").style.visibility = "visible";
		}
		if(selected == "Pizza carne")
		{
    		document.getElementById("CaracteristicasCa").style.visibility = "visible";
		}
      };
    </script>
	
	<script type="text/javascript">
      function verCaracteristicasEnsaladas(){
      	var combo = document.getElementById("Ens");
		var selected = combo.options[combo.selectedIndex].text;
		cerrar();
		document.getElementById("ListaCarrito").style.visibility = "hidden";
		if(selected == "Ensalada de la casa")
		{
    		document.getElementById("CaracteristicasCas").style.visibility = "visible";
		}
		if(selected == "Ensalada frutos rojos")
		{
    		document.getElementById("CaracteristicasFr").style.visibility = "visible";
		}
		if(selected == "Ensalada de brocolli")
		{
    		document.getElementById("CaracteristicasBr").style.visibility = "visible";
		}
		if(selected == "Ensalada de manzana")
		{
    		document.getElementById("CaracteristicasMa").style.visibility = "visible";
		}
      };
    </script>
	
	<script type="text/javascript">
      function verCaracteristicasPastas(){
      	var combo = document.getElementById("Pas");
		var selected = combo.options[combo.selectedIndex].text;
		cerrar();
		document.getElementById("ListaCarrito").style.visibility = "hidden";
		if(selected == "Pasta de mariscos")
		{
    		document.getElementById("CaracteristicasMar").style.visibility = "visible";
		}
		if(selected == "Pasta de arandanos")
		{
    		document.getElementById("CaracteristicasAr").style.visibility = "visible";
		}
		if(selected == "Pasta vegetariana")
		{
    		document.getElementById("CaracteristicasVe").style.visibility = "visible";
		}
		if(selected == "Pasta italiana")
		{
    		document.getElementById("CaracteristicasIt").style.visibility = "visible";
		}
      };
    </script>
	
	<script type="text/javascript">
      function verCaracteristicasBebidas(){
      	var combo = document.getElementById("Beb");
		var selected = combo.options[combo.selectedIndex].text;
		cerrar();
		document.getElementById("ListaCarrito").style.visibility = "hidden";
		if(selected == "Coca cola")
		{
    		document.getElementById("CaracteristicasCo").style.visibility = "visible";
		}
		if(selected == "Pepsi")
		{
    		document.getElementById("CaracteristicasPep").style.visibility = "visible";
		}
		if(selected == "Mundet")
		{
    		document.getElementById("CaracteristicasMu").style.visibility = "visible";
		}
		if(selected == "Sprite")
		{
    		document.getElementById("CaracteristicasSp").style.visibility = "visible";
		}
      };
    </script>
		

  <script type="text/javascript">
      //document.getElementById("lista-total").addEventListener("click",mostrarTabla,false);
    </script>
	  
  </body>
</html>