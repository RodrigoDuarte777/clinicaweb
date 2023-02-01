<?php

require "../../modeloDAO/conexao.php";
require "../../modeloDAO/secretariaDAO.php";
require "../../modelo/secretaria.php";

$secretariaDAO  = new secretariaDAO ($conexao);
$secretarias = $secretariaDAO ->Listar();