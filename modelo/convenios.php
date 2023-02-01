<?php
  class convenio{
      private $id;
      private $nome;
      private $telefone;
      private $cnpj;
      private $endereco;
      private $planos;

      function __Contruct($nome="", $telefone="", $cnpj="", $endereco="", $planos=""){

        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->planos = $planos;
      }

      public function getnome(){
          return $this->nome;
      }
      public function setnome(){
          $this->nome = $nome;
      }
      public function gettelefone(){
          return $this->telefone;
      }
      public function settelefone(){
          $this->telefone = $telefone;
      }
      public function getcnpj(){
          return $this->cnpj;
      }
      public function setcnpj(){
          $this->cnpj = $cnpj;
      }
      public function getendereco(){
          return $this->endereco;
      }
      public function setendereco(){
          $this->endereco = $endereco;
      }
      public function getplanos(){
          return $this->planos;
      }
      public function setplanos(){
          $this->planos = $planos;
      }
  }