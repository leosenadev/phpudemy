<?php 

class Sql extends PDO{

	private $conn;


	public function __construct(){

		$this->conn = new PDO("pgsql:host=localhost;dbname=db_php","postgres","1234");
	}

	private function setParams($statment, $parameters= array()){

		foreach($parameters as $key=>$value){
			$this->setParam($key,$value);
		}
	}

	private function setParam($statment,$key,$value){
		$statment->bindParam($key,$value);
	}

	public function execQuery($rawQuery, $params=array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt,$params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery,$params=array()){

		$stmt = $this->execQuery($rawQuery,$params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}


}