<?php 
class medico{
	
	private $id;
	private $nome;
	private $cpf;
	private $rg;
	private $crm;
	private $telefone;
	private $endereco;
	private $sexo;
	private $usuario;
	private $senha;

	function __construct($nome="", $cpf="", $rg="", $crm="",$endereco="", $telefone="", $sexo="", $usuario="",
		                $senha=""){
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->rg = $rg;
		$this->crm = $crm;
		$this->telefone = $telefone;
		$this->endereco = $endereco;
		$this->sexo = $sexo;
		$this->usuario = $usuario;
		$this->senha = $senha;
		
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
	public function getcrm(){
		return $this->crm;
	}
	public function setcrm($crm){
		$this->crm = $crm;
	}
	
	public function gettelefone(){
		return $this->telefone;
	}
	public function settelefone($telefone){
		$this->telefone = $telefone;
	}
	public function getendereco(){
		return $this->endereco;
	}
	public function setendereco($endereco){
		$this->endereco = $endereco;
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