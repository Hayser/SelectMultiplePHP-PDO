<?php 

class db {
    private $host     = "localhost";
	private $dbname   = "prueba";
	private $username = "root";
	private $password = "root";
	protected $con;

	public function __construct() {

		try {
			// new PDO("mysql:host=localhost;dbname=messenger","root","");
			$this->con = new PDO("mysql:host=". $this->host. ";dbname=". $this->dbname, $this->username, $this->password);
			echo "Se conecto a la base de datos";
		}
		catch(Exception $e){
			echo "Error No se puede conectar a la base de datos". $e->getMessage();
		}
	}

}




 ?>