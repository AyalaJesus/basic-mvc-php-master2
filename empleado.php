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
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a onclick="registroProd()">Agregar producto</a></li>
                  <li><a onclick="Mostrar()">Ver lista pedidos</a></li>
                  <li><a href="./index.php">Cerrar sesión</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
		
	<!-- FORMULARIO PARA INGRESAR PRODUCTOS -->
    <div class="" id="Mostrar" style="visibility: hidden">
      <div class="front absolute col-xs-12">
        <h2 class ="">Lista de productos</h2>
		<div class="front absolute col-xs-12">
			
			
						<table class ="table">
						  <thead>
							<th>id</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Descripción</th>
							<th>Categoria</th>
							<th>Modificar</th>
							<th>Eliminar</th>
						  </thead>
						  <tbody>
				<?php
					foreach ($productos as $producto) {
				?>
						  <tr><td id="id_pro"><?php echo $producto['id']; ?></td>
						  <td><?php echo $producto['nombre']; ?></td>
						  <td><?php echo $producto['precio']; ?></td>
						  <td><?php echo $producto['descripcion']; ?></td>
						  <td><?php echo $producto['categoria_id']; ?></td>
              <td><button type="button" class="form-control" onclick="ModificarPro('<?php echo $producto['id']?>','<?php echo $producto['nombre']?>',
                '<?php echo $producto['precio']?>','<?php echo $producto['categoria_id']?>','<?php echo $producto['descripcion']?>'
                )">Modificar</button> </td>
              <td><button type="button" class="form-control" onclick="elimina('<?php echo $producto['nombre']?>')">Eliminar</button> </td>
              </tr>
						  <?php
					}
				?>
						  </tbody>
						</table>
				
				  <br><center><button class="form-control" type="button" id="ver" onclick="cerrar()">Cerrar</button></center>

		</div>
      </div>
    </div>
	
	
    <!-- FORMULARIO PARA INGRESAR PRODUCTOS -->
    <div class="video-container vertical-center" id="registroPro" style="visibility: hidden">
      <div class="front absolute card col-xs-12">
        <h2 class ="white-text">Registrar nuevo producto</h2>
        <input type="text" class="form-control" id="nombre" value="" placeholder="Escribe el nombre del producto "><br>
        <input type="number" class="form-control" id="precio" value="" placeholder="Escribe el precio del producto "><br>
        <select id="categoria" class="form-control" name="">
					<option value="1">Pizzas</option>
					<option value="2">Pastas</option>
					<option value="3">Ensaladas</option>
        	<option value="4">Bebidas</option>
        </select><br>
				<textarea class="form-control" id="descripcion"></textarea>
				<br>

        <input type="button" class="form-control" id="guardar" value="Guardar producto">
        <br><center><input type="button" class="form-control" id="ver" onclick="cerrar()" value="Volver"></center>
      </div>
    </div>


    <!-- FORMULARIO PARA INGRESAR PRODUCTOS -->
    <div class="video-container vertical-center" id="ModificarProducto" style="visibility: hidden">
      <div class="front absolute card col-xs-12">
        <h2 class ="white-text">Datos del producto</h2><br>
        <label class="white-text">Nombre</label><br>
        <textarea class="form-control" id="nombreA" readonly="true"></textarea>
        <label class="white-text">Precio</label><br>
        <textarea class="form-control" id="precioA"></textarea>
        <label class="white-text">Categoria</label><br>
        <select id="categoriaA" class="form-control">
          <option value="1">Pizzas</option>
          <option value="2">Pastas</option>
          <option value="3">Ensaladas</option>
          <option value="4">Bebidas</option>
        </select>
        <label class="white-text">Descripcion</label><br>
        <textarea class="form-control" id="descripcionA"></textarea>
        <br>

        <input type="button" class="form-control" id="Actualizar" value="Guardar producto">
                <input type="button" class="form-control" onclick="cerrar()" value="Cerrar">
      </div>
    </div>

     <script src="./assets/js/script.js" charset="utf-8"></script>
    <script type="text/javascript">
      
      function elimina(seleccionado){

        var aux=seleccionado;
        alert(aux);
        $.ajax({
          method: "POST",
          url: "controllers/ProductsController.php",
          data: { idProducto: aux, eliminar: "eliminar" }
        })
        .done(function() {
           alert("Producto eliminado correctamente!");
         });
        location.reload();

      }
    </script>

    <script type="text/javascript">
      
      function ModificarPro(a,b,c,d,e){
        var aa = a;
        var bb = b;
        var cc = c;
        var dd = d;
        var ee = e;
        document.getElementById("nombreA").innerHTML = bb;
        document.getElementById("precioA").innerHTML = cc;
        document.getElementById("descripcionA").innerHTML = ee;
        cerrar();
        document.getElementById("ModificarProducto").style.visibility = "visible";
      }
    </script>

    <script type="text/javascript">
      let guardar = document.querySelector("#guardar");
      guardar.addEventListener('click',function(){
        let nombre = document.querySelector("#nombre");
        let precio = document.querySelector("#precio");
		let categoria = document.querySelector("#categoria");
        let descripcion = document.querySelector("#descripcion");
        let producto = new Producto(nombre.value,precio.value,categoria.value,descripcion.value);
				let listaproductos = new Array();
				listaproductos.push(producto);
				let arregloJSON = JSON.stringify(listaproductos);
				console.log(arregloJSON);
				$.ajax({
				  method: "POST",
				  url: "controllers/ProductsController.php",
				  data: { productos: arregloJSON, funcion: "insertarProductos" }
				})
				.done(function() {
				   console.log( "Datos guardados ");
				 });
      });
    </script>
	  
	  <script>
    function volver() {
        document.location.href = "./index.php";
    }
	</script>

  <script type="text/javascript">
      let guardarA = document.querySelector("#Actualizar");
      guardarA.addEventListener('click',function(){
        let id = document.querySelector("#idA");
        let nombre = document.querySelector("#nombreA");
        let precio = document.querySelector("#precioA");
        let categoria = document.querySelector("#categoriaA");
        let descripcion = document.querySelector("#descripcionA");
        alert(nombre.value);
        let producto = new Producto(nombre.value,precio.value,categoria.value,descripcion.value);
        let listaproductos = new Array();
        listaproductos.push(producto);
        let arregloJSON = JSON.stringify(listaproductos);
        console.log(arregloJSON);
        $.ajax({
          method: "POST",
          url: "controllers/ProductsController.php",
          data: { Act: arregloJSON, modificar: "ActualizarProd" }
        })
        .done(function() {
           console.log( "Datos guardados ");
         });
      });
    </script>
    
    <script>
    function volver() {
        cerrar();
    }
  </script>
	
	<script>
    function cerrar() {
        document.getElementById("registroPro").style.visibility = "hidden";
		document.getElementById("Mostrar").style.visibility = "hidden";
    document.getElementById("ModificarProducto").style.visibility = "hidden";
    }
	</script>
	
	<script>
    function registroProd() {
		cerrar();
        document.getElementById("registroPro").style.visibility = "visible";
    }
	</script>
	<script>
    function Mostrar() {
		cerrar();
        document.getElementById("Mostrar").style.visibility = "visible";
    }
  </script>

  </body>
</html>