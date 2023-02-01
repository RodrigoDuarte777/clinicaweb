<?php


class clinica{
	
	private $id;
	private $nome;
	private $cnpj;
	private $endereco;
	private $telefone;
	
	function __construct($nome="", $cnpj="", $endereco="", $telefone=""){
		$this->nome = $nome;
		$this->cnpj = $cnpj;
		$this->endereco = $endereco;
		$this->telefone = $telefone;
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
	
	public function getcnpj(){
		return $this->cnpj;
	}
	public function setcnpj($cnpj){
		$this->cnpj = $cnpj;
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
	
}