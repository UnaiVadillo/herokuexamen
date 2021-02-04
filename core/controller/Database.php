<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="bdabc0a31ebf21";$this->pass="6fc0ed6a";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_47c5e4a9c8f7a03";
		//Copiar también la información de la conexión en la función de abajo connect()
	}

	function connect(){
		//Copiar aquí también la info de la conexión
		$this->user="bdabc0a31ebf21";$this->pass="6fc0ed6a";$this->host="eu-cdbr-west-03.cleardb.net";$this->ddbb="heroku_47c5e4a9c8f7a03";
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
