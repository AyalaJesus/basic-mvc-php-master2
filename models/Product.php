<?php
session_start();
require_once 'Database.php';
class Product {
	public $name;
	public $price;
	public $category;
	public $description;

	public function __construct($name, $price, $category, $description) {
      $this->name = $name;
			$this->price = $price;
	    $this->category = $category;
	    $this->description = $description;
  }
	//mysqli->insert_id
	// return rows
	public function save(){
		$db=new Database();
		$sql = "INSERT INTO producto(nombre,precio,categoria_id,descripcion) VALUES('".$this->name."',$this->price,$this->category,'".$this->description."')";
		$db->query($sql);
		$lastId=(int)$db->mysqli->insert_id;
		$db->close();
		return true;
	}

	public function updateP(){
     $db = new Database();
    $sql = "UPDATE  producto set categoria_id=$this->category ,precio=$this->price, descripcion='".$this->description."' WHERE nombre= '".$this->name."'";
    $db->query($sql);
    $db->close();
    return true; 
    }

	public function delete(){
    $db = new Database();
    echo $llega = "HOLA  ".$this->nom;
    $sql = "DELETE FROM producto WHERE nombre = '".$this->name."'";
    $db->query($sql);
    $db->close();
    return true;
  }

	
	static function get(){
		$sql= "SELECT *FROM producto";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	
	static function getPi(){
		$sql= "SELECT *FROM producto where categoria_id = 1";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function getEn(){
		$sql= "SELECT *FROM producto where categoria_id = 2";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function getPa(){
		$sql= "SELECT *FROM producto where categoria_id = 3";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function getBe(){
		$sql= "SELECT *FROM producto where categoria_id = 4";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	
	static function get1(){
		$sql= "SELECT *FROM producto where categoria_id = 1 and nombre ='Pizza hawaiana'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get2(){
		$sql= "SELECT *FROM producto where categoria_id = 1 and nombre ='Pizza mexicana'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get3(){
		$sql= "SELECT *FROM producto where categoria_id = 1 and nombre ='Pizza pepperoni'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get4(){
		$sql= "SELECT *FROM producto where categoria_id = 1 and nombre ='Pizza carne'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}

	//ensaladas
	static function get5(){
		$sql= "SELECT *FROM producto where categoria_id = 3 and nombre ='Ensalada de la casa'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get6(){
		$sql= "SELECT *FROM producto where categoria_id = 3 and nombre ='Ensalada frutos rojos'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get7(){
		$sql= "SELECT *FROM producto where categoria_id = 3 and nombre ='Ensalada de brocolli'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get8(){
		$sql= "SELECT *FROM producto where categoria_id = 3 and nombre ='Ensalada de manzana'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}


	//Pastas
	static function get9(){
		$sql= "SELECT *FROM producto where categoria_id = 2 and nombre ='Pasta de mariscos'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get10(){
		$sql= "SELECT *FROM producto where categoria_id = 2 and nombre ='Pasta de arandanos'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get11(){
		$sql= "SELECT *FROM producto where categoria_id = 2 and nombre ='Pasta italiana'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get12(){
		$sql= "SELECT *FROM producto where categoria_id = 2 and nombre ='Pasta vegetariana'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}


	//Bebidas
	static function get13(){
		$sql= "SELECT *FROM producto where categoria_id = 4 and nombre ='Coca cola'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get14(){
		$sql= "SELECT *FROM producto where categoria_id = 4 and nombre ='Pepsi'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get15(){
		$sql= "SELECT *FROM producto where categoria_id = 4 and nombre ='Mundet'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
	static function get16(){
		$sql= "SELECT *FROM producto where categoria_id = 4 and nombre ='Sprite'";
		$db=new Database();
		if($rows=$db->query($sql)){
			return $rows;
			//var_dump($rows);
		}
		return false;
	}
}
