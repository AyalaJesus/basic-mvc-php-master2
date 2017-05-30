<?php

if( isset($_POST['funcion']) ) {
	require_once("../models/Pedido.php");
	require_once("../models/Cleaner.php");

	//echo 'Hola AJAX '.$_POST['funcion'];
	$pedidos = json_decode($_POST['pedidos']);

	foreach ($pedidos as $item) {
		$nombre = Cleaner::cleanInput($item->_nombre);
		$domicilio = Cleaner::cleanInput($item->_domicilio);
		$telefono = Cleaner::cleanInput($item->_telefono);
		$pedid = new Pedido($nombre,$domicilio,$telefono);
		//$pedid->save();
		//echo $nombre;
	}

} else {
	include_once("models/Pedido.php");
	$cliente = Pedido::get();
}