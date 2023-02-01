<?php

    require "../../modeloDAO/conexao.php";
    require "../../modeloDAO/administradorDAO.php";
    require "../../modelo/administrador.php";

    $administradorDAO = new administradorDAO($conexao);
    $administradores = $administradorDAO->Listar();
