<?php

class administrador{

    private $id;
    private $nome;
    private $cnpj;
   
    private $endereco;
    private $telefone;
    private $usuario;
    private $senha;

   function __construct($nome="", $cnpj="" , $endereco="", $telefone="", $usuario="", $senha=""){

        $this->nome= $nome;
        $this->cnpj= $cnpj;
       
        $this->endereco= $endereco;
        $this->telefone= $telefone;
        $this->usuario= $usuario;
        $this->senha= $senha;

    }

    public function getnome(){
        return $this->nome;
    }
    public function setnome($nome){
        $this->nome = $nome;
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
    public function getcnpj(){
        return $this->cnpj;
    }
    public function setcnpj($cnpj){
        $this->cpf = $cnpj;
    }
    public function getid(){
        return $this->id;
    }
    public function setid($id){
        $this->id = $id;
    }
    public function gettelefone(){
        return $this->telefone;
    }
    public function settelefone($telefone){
        $this->telefone = $telefone;
    }

}


