<?php  

    require "../../modeloDAO/conexao.php";
    require "../../modeloDAO/medicoDAO.php";
    require "../../modelo/user/medico.php";

    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $senhaa = $_POST['senha'];

    $senha = base64_encode($senhaa);


    $medico = new medico($usuario,$senha);
    $medico->setid($id);

    $medicoDAO = new medicoDAO($conexao);
    $medicoDAO->AtualizarUser($medico);
    

    header('Location: ../../view/medico/painel_medico.php');