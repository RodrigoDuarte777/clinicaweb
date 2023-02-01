<?php

require "../../modeloDAO/conexao.php";
require "../../modeloDAO/medicoDAO.php";
require "../../modelo/medico.php";

$medicoDAO  = new medicoDAO ($conexao);
$medicos = $medicoDAO ->Listar();