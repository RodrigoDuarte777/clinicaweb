<?php

	   try{
	       $conexao = new PDO("mysql:host=127.0.0.1;dbname=clinica_web","root","");
	     
	   }catch(PDOException $e){
	        echo "Falha na conexão com o banco de dados:".$e->getMessage();
	        die();
	   }
 ?>

