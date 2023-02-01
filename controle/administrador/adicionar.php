<?php

   require "../../modeloDAO/conexao.php";
   require "../../modeloDAO/administradorDAO.php";
   require "../../modelo/administrador.php";
   
   $nome = $_POST['nome'];
   $cnpj = $_POST['cnpj'];
 
   $endereco =  $_POST['endereco'];
   $telefone = $_POST['telefone'];
   $usuario = $_POST['usuario'];
   $senhaa = $_POST['senha'];
   
   $senha = md5($senhaa);

   $administrador = new administrador($nome,$cnpj,$endereco,$telefone,$usuario,$senha);

   $administradorDAO = new administradorDAO($conexao);
   $administradorDAO->Adicionar($administrador);

   header('Location: ../../view/administrador/dados_administrador.php');
   
   
