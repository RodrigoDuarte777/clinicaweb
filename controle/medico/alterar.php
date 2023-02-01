<?php

    require "../../modeloDAO/conexao.php";
    require "../../modeloDAO/medicoDAO.php";
    require "../../modelo/medico.php";


    if(array_key_exists("id", $_GET)){

            $id = $_GET['id'];
            
            $medicoDAO = new medicoDAO($conexao);
            $medico = $medicoDAO->Buscar($id);

            require __DIR__."/../../view/medico/alterar_medico.php";
    }else{

            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];
            $crm = $_POST['crm'];
            $endereco =  $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $sexo = $_POST['sexo'];
        
            $medico = new medico($nome,$cpf,$rg,$crm,$endereco,$telefone,$sexo);
            $medico->setid($id);
        
            $medicoDAO = new medicoDAO($conexao);
            $medicoDAO->Atualizar($medico);
        
            header('Location: ../../view/medico/dados_medico.php');
    
        
        }