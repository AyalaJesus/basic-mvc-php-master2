<?php
require_once 'Database.php';
class Pedido{
	public $name;
	public $addres;
	public $phone;

	public function __construct($name, $addres, $phone) {
		$this->name = $name;
		$this->addres = $addres;
	    $this->phone = $phone;
  }

	// return rows
	public function save() {
		$db = new Database();
		$sql = "INSERT INTO
						 	cliente(nombre, direccion, telefono)
					VALUES(
									'".$this->name."',
									'".$this->addres."',
									'".$this->phone."'
								)
					";
					echo $sql;
		$db->query($sql);
		$lastId = (int)$db->mysqli->insert_id;
		echo $lastId;
		$db->close();
		return true;
	}
	
	static function get() {
		$sql = " SELECT
		 						*
							FROM
								cliente
						";
		$db = new Database();
		if($rows = $db->query($sql)) {
			return $rows;
		}
		return false;
	}

}
