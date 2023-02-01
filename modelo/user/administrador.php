<?php

class administrador{

    private $id;
	private $usuario;
	private $senha;

function __construct($usuario="", $senha=""){
      $this->usuario = $usuario;
	  $this->senha = $senha;
	}

	public function getid(){
		return $this->id;
	}
	public function setid($id){
		$this->id = $id;
	}
	public function getusuario(){
		return $this->usuario;
	}
	public function setusuario($usuario){
		$this->usuario = $usuario;
	}
	public function getsenha(){
		return $this->senha;
	}
	public function setsenha($senha){
		$this->senha = $senha;
	}

}