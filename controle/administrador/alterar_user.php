<?php  

    require "../../modeloDAO/conexao.php";
    require "../../modeloDAO/administradorDAO.php";
    require "../../modelo/user/administrador.php";

    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $senhaa = $_POST['senha'];

    $senha = md5($senhaa);

    $administrador = new administrador($usuario,$senha);
    $administrador->setid($id);

    $administradorDAO = new administradorDAO($conexao);
    $administradorDAO->AtualizarUser($administrador);
    

    header('Location: ../../view/administrador/painel_administrador.php');