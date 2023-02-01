<?php

    require "../../modeloDAO/conexao.php";
    require "../../modeloDAO/administradorDAO.php";
    require "../../modelo/administrador.php";

  if(array_key_exists("id", $_GET)){

        $id = $_GET['id'];
        
        $administradorDAO = new administradorDAO($conexao);
        $administrador = $administradorDAO->BuscarPorId($id);

        require __DIR__."/../../view/administrador/alterar_administrador.php";

   }else{

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cnpj'];
      
        $endereco =  $_POST['endereco'];
        $telefone = $_POST['telefone'];

        $administrador = new administrador($nome,$cnpj,$endereco,$telefone);
        
        $administrador->setid($id);

        $administradorDAO = new administradorDAO($conexao);
        $administradorDAO->Atualizar($administrador);

        header('Location: ../../view/administrador/dados_administrador.php');

   }
