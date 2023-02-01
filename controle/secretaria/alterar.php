<?php

    require "../../modeloDAO/conexao.php";
    require "../../modeloDAO/secretariaDAO.php";
    require "../../modelo/secretaria.php";


    if(array_key_exists("id", $_GET)){

            $id = $_GET['id'];
            
            $secretariaDAO = new secretariaDAO($conexao);
            $secretaria = $secretariaDAO->Buscar($id);

            require __DIR__."/../../view/secretaria/alterar_secretaria.php";
    }else{

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];
            $endereco =  $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $sexo = $_POST['sexo'];
        
            $secretaria = new secretaria($nome,$cpf,$rg,$endereco,$telefone,$sexo);
            $secretaria->setid($id);
        
            $secretariaDAO = new secretariaDAO($conexao);
            $secretariaDAO->Atualizar($secretaria);
        
            header('Location: ../../view/secretaria/dados_secretaria.php');
     
        }