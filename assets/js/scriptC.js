var carrito = [
];

window.onload = CargarEventos;

function CargarEventos()
{
	document.getElementById("mostrar-tabla").addEventListener("click",mostrarTabla,false);
	document.getElementById("nuevo-articulo1").addEventListener("submit",nuevoArticulo1,false);
	document.getElementById("nuevo-articulo2").addEventListener("submit",nuevoArticulo2,false);
	document.getElementById("nuevo-articulo3").addEventListener("submit",nuevoArticulo3,false);
	document.getElementById("nuevo-articulo4").addEventListener("submit",nuevoArticulo4,false);
	document.getElementById("nuevo-articulo5").addEventListener("submit",nuevoArticulo5,false);
	document.getElementById("nuevo-articulo6").addEventListener("submit",nuevoArticulo6,false);
	document.getElementById("nuevo-articulo7").addEventListener("submit",nuevoArticulo7,false);
	document.getElementById("nuevo-articulo8").addEventListener("submit",nuevoArticulo8,false);
	document.getElementById("nuevo-articulo9").addEventListener("submit",nuevoArticulo9,false);
	document.getElementById("nuevo-articulo10").addEventListener("submit",nuevoArticulo10,false);
	document.getElementById("nuevo-articulo11").addEventListener("submit",nuevoArticulo11,false);
	document.getElementById("nuevo-articulo12").addEventListener("submit",nuevoArticulo12,false);
	document.getElementById("nuevo-articulo13").addEventListener("submit",nuevoArticulo13,false);
	document.getElementById("nuevo-articulo14").addEventListener("submit",nuevoArticulo14,false);
	document.getElementById("nuevo-articulo15").addEventListener("submit",nuevoArticulo15,false);
	document.getElementById("nuevo-articulo16").addEventListener("submit",nuevoArticulo16,false);

	}

function mostrarTabla()
{
  var cuerpoTabla = document.getElementById("lista-pedidos");
  var tablaLlena ="";

  for (var i = 0; i<carrito.length; i++) {
      tablaLlena += "<tr><td>"+carrito[i].idproducto+"</td><td>"+carrito[i].cantidad+"</td><td>"+carrito[i].precio+"</td></tr>";
  }
  cuerpoTabla.innerHTML = tablaLlena;
}

function nuevoArticulo1(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre").value;
  var nuevoCa = document.getElementById("cantidad").value;
  var nuevoPr = document.getElementById("precio").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo2(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre2").value;
  var nuevoCa = document.getElementById("cantidad2").value;
  var nuevoPr = document.getElementById("precio2").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo3(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre3").value;
  var nuevoCa = document.getElementById("cantidad3").value;
  var nuevoPr = document.getElementById("precio3").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo4(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre4").value;
  var nuevoCa = document.getElementById("cantidad4").value;
  var nuevoPr = document.getElementById("precio4").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo5(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre5").value;
  var nuevoCa = document.getElementById("cantidad5").value;
  var nuevoPr = document.getElementById("precio5").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo6(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre6").value;
  var nuevoCa = document.getElementById("cantidad6").value;
  var nuevoPr = document.getElementById("precio6").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo7(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre7").value;
  var nuevoCa = document.getElementById("cantidad7").value;
  var nuevoPr = document.getElementById("precio7").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo8(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre8").value;
  var nuevoCa = document.getElementById("cantidad8").value;
  var nuevoPr = document.getElementById("precio8").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo9(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre9").value;
  var nuevoCa = document.getElementById("cantidad9").value;
  var nuevoPr = document.getElementById("precio9").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo10(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre10").value;
  var nuevoCa = document.getElementById("cantidad10").value;
  var nuevoPr = document.getElementById("precio10").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo11(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre11").value;
  var nuevoCa = document.getElementById("cantidad11").value;
  var nuevoPr = document.getElementById("precio11").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo12(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre12").value;
  var nuevoCa = document.getElementById("cantidad12").value;
  var nuevoPr = document.getElementById("precio12").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo13(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre13").value;
  var nuevoCa = document.getElementById("cantidad13").value;
	var nuevoPr = document.getElementById("precio13").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo14(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre14").value;
  var nuevoCa = document.getElementById("cantidad14").value;
  var nuevoPr = document.getElementById("precio14").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo15(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre15").value;
  var nuevoCa = document.getElementById("cantidad15").value;
  var nuevoPr = document.getElementById("precio15").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}

function nuevoArticulo16(event)
{
  event.preventDefault();
  var nuevoid = document.getElementById("nombre16").value;
  var nuevoCa = document.getElementById("cantidad16").value;
  var nuevoPr = document.getElementById("precio16").value;
  var agre = { idproducto:nuevoid,cantidad:nuevoCa,precio:nuevoPr};
  carrito.push(agre);
}
