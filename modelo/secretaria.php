<?php
class secretaria{

	private $id;
	private $nome;
	private $cpf;
	private $rg;
	private $endereco;
	private $telefone;
	private $usuario;
	private $senha;
	private $sexo;

function __construct($nome="", $cpf="", $rg="",$endereco="", $telefone="", $sexo="",$usuario="", $senha=""){
	
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->rg = $rg;
		$this->telefone = $telefone;
		$this->endereco = $endereco;
		$this->usuario = $usuario;
		$this->senha = $senha;
		$this->sexo = $sexo;
	}


	public function getid(){
		return $this->id;
	}
	public function setid($id){
		$this->id = $id;
	}
	public function getnome(){
		return $this->nome;
	}
	public function setnome($nome){
		$this->nome = $nome;
	}
	
	public function getcpf(){
		return $this->cpf;
	}
	public function setcpf($cpf){
		$this->cpf = $cpf;
	}
	public function getrg(){
		return $this->rg;
	}
	public function setrg($rg){
		$this->rg = $rg;
	}
	public function getendereco(){
		return $this->endereco;
	}
	public function setendereco($endereco){
		$this->endereco = $endereco;
	}
	public function gettelefone(){
		return $this->telefone;
	}
	public function settelefone($telefone){
		$this->telefone = $telefone;
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
	public function getsexo(){
		return $this->sexo;
	}
	public function setsexo($sexo){
		$this->sexo = $sexo;
	}
}