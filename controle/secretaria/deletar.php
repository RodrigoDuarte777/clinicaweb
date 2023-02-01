<?php 
   require "../../modeloDAO/conexao.php";
   require "../../modeloDAO/secretariaDAO.php";

   $id = $_GET['id'];

   $secretariaDAO = new secretariaDAO($conexao);
   $secretariaDAO->Deletar($id);

   header('Location: ../../view/secretaria/dados_secretaria.php');