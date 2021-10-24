<?php

class Usuario{
	
	private $idusuario;
	private $usuario;
	private $senha;
	private $email;
	private $salario;

	public function setIdusuario($value){

		$this->idusuario = $value;

	}
	public function getIdusuario(){

		return $this->idusuario;
	}

	public function setUsuario($value){

		$this->usuario = $value;

	}
	public function getUsuario(){

		return $this->usuario;
	}

	public function setSenha($value){

		$this->senha = $value;

	}
	public function getSenha(){

		return $this->senha;
	}

	public function setEmail($value){

		$this->email = $value;

	}
	public function getEmail(){

		return $this->email;
	}
	public function setSalario($value){

		$this->salario = $value;

	}
	public function getSalario(){

		return $this->salario;
	}

	//LISTAR - MOSTRA OS DADOS COM O ID
	public function loadById($id){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario=:ID",array(

			":ID"=>$id
		));

		if(count($results) > 0){

			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setUsuario($row['usuario']);
			$this->setSenha($row['senha']);
			$this->setEmail($row['email']);
			$this->setSalario($row['salario']);
		}
	}

	//LISTAR - MOSTAR OS DADOS COM ID
	public function __tostring(){

		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"usuario"=>$this->getUsuario(),
			"senha"=>$this->getSenha(),
			"email"=>$this->getEmail(),
			"salario"=>$this->getSalario()

		));
	}
	//LISTAR - MOSTRA TODOS OS DADOS
	public static function listarTodos(){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY usuario");

	}
	//LISTAR - MOSTA OS DADOS COM BUSCA
	public static function buscarDados($valor){

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE usuario LIKE :BUSCA",array(

			':BUSCA'=>'%'.$valor.'%'

		));
	}

	public function validarUsuario($login,$senha){

		$sql = new Sql();

		$results=$sql->select("SELECT * FROM tb_usuarios WHERE usuario = :USUARIO AND senha = :SENHA",array(
				':USUARIO'=>$login,':SENHA'=>$senha

			));

		if(count($results) > 0){

			$row = $results[0];

			$this->setIdusuario($row['idusuario']);
			$this->setUsuario($row['usuario']);
			$this->setSenha($row['senha']);
			$this->setEmail($row['email']);
			$this->setSalario($row['salario']);
		}else{

			die("Login e/ou senha inválidos !");
		}


	}
}