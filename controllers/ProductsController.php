<?php
if(isset($_POST['eliminar'])){
	require_once("../models/Product.php");
	require_once("../models/Cleaner.php");
	$id=$_POST['idProducto'];
	$producto = new Product($id,0,0,0);
	$producto->delete();
}

if(isset($_POST['modificar'])){
	require_once("../models/Product.php");
	require_once("../models/Cleaner.php");

	$productos= json_decode($_POST['Act']);

	foreach($productos as $item){
		$nombre =Cleaner::cleanInput($item->_nombre);
		$categoria =(int)Cleaner::cleanInput($item->_categoria);

		$producto= new Product($item->_nombre,$item->_precio,$item->_categoria,$item->_descripcion);
		$producto->updateP();
	}
	
}

if( isset($_POST['funcion'])) {
	require_once("../models/Product.php");
	require_once("../models/Cleaner.php");
	//echo 'Hola AJAX '.$_POST['funcion'];

	$productos= json_decode($_POST['productos']);

	foreach($productos as $item){
		$nombre =Cleaner::cleanInput($item->_nombre);
		$categoria =(int)Cleaner::cleanInput($item->_categoria);

		$producto= new Product($item->_nombre,$item->_precio,$item->_categoria,$item->_descripcion);
		// $list=$producto->get();
		// var_dump($list);
		$producto->save();
	}

} else {
		//include_once("models/Model.php");
		//include_once("../Pizzas.php") 
		include_once("models/Product.php");
		$productos =Product::get();
		
		$productosPi =Product::getPi();
		$productosPa =Product::getPa();
		$productosEn =Product::getEn();
		$productosBe =Product::getBe();
		
		$productos1 =Product::get1();
		$productos2 =Product::get2();
		$productos3 =Product::get3();
		$productos4 =Product::get4();

		$productos5 =Product::get5();
		$productos6 =Product::get6();
		$productos7 =Product::get7();
		$productos8 =Product::get8();

		$productos9 =Product::get9();
		$productos10 =Product::get10();
		$productos11 =Product::get11();
		$productos12 =Product::get12();

		$productos13 =Product::get13();
		$productos14 =Product::get14();
		$productos15 =Product::get15();
		$productos16 =Product::get16();
	
}




// class ProductController {
// 	public $model;
// 	public function __construct() {
//     $this->model = new Model();
//   }
// 	public function index()
// 	{
// 		$products = $this->model->get();
// 		include 'views/products/index.php';
// 	}
// }

//?>
