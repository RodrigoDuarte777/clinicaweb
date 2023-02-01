<?php  

require "../../modeloDAO/conexao.php";
require "../../modeloDAO/secretariaDAO.php";
require "../../modelo/user/secretaria.php";

    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $senhaa = $_POST['senha'];

    $senha = base64_encode($senhaa);

    $secretaria = new secretaria($usuario,$senha);
    $secretaria->setid($id);

    $secretariaDAO = new secretariaDAO($conexao);
    $secretariaDAO->AtualizarUser($secretaria);

    header('Location: ../../view/secretaria/painel_secretaria.php');