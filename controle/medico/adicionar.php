<?php

   require "../../modeloDAO/conexao.php";
   require "../../modeloDAO/medicoDAO.php";
   require "../../modelo/medico.php";
   
      $nome = $_POST['nome'];
      $cpf = $_POST['cpf'];
      $rg = $_POST['rg'];
      $crm = $_POST['crm'];
      $endereco =  $_POST['endereco'];
      $telefone = $_POST['telefone'];
      $sexo = $_POST['sexo'];
      $usuario = $_POST['usuario'];
      $senhaa = $_POST['senha'];

      $senha = base64_encode($senhaa);
   
      $medico = new medico($nome,$cpf,$rg,$crm,$endereco,$telefone,$sexo,$usuario,$senha);

      $medicoDAO = new medicoDAO ($conexao);
      $medicoDAO ->Adicionar($medico);

      header('Location: ../../view/medico/dados_medico.php');