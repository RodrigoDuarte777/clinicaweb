<?php 
   require "../../modeloDAO/conexao.php";
   require "../../modeloDAO/medicoDAO.php";

   $id = $_GET['id'];

   $medicoDAO = new medicoDAO($conexao);
   $medicoDAO->Deletar($id);

   header('Location: ../../view/medico/dados_medico.php');