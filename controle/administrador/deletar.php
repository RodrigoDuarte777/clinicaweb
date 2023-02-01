<?php 

   require "../../modeloDAO/conexao.php";
   require "../../modeloDAO/administradorDAO.php";

   $id = $_GET['id'];

   $administradorDAO = new administradorDAO($conexao);
   $administradorDAO->Deletar($id);

   header('Location: ../../view/administrador/dados_administrador.php');