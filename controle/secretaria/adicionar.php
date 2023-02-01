<?php

require "../../modeloDAO/conexao.php";
require "../../modeloDAO/secretariaDAO.php";
require "../../modelo/secretaria.php";
   
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $rg = $_POST['rg'];
   $endereco =  $_POST['endereco'];
   $telefone = $_POST['telefone'];
   $sexo = $_POST['sexo'];
   $usuario = $_POST['usuario'];
   $senhaa = $_POST['senha'];
   
   $senha = base64_encode($senhaa);
  
   $secretaria = new secretaria($nome,$cpf,$rg,$endereco,$telefone,$sexo,$usuario,$senha);

   $secretariaDAO = new secretariaDAO ($conexao);
   $secretariaDAO ->Adicionar($secretaria);

   header('Location: ../../view/secretaria/dados_secretaria.php');