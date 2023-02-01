<?php

 $servidor = "127.0.0.1";
 $usuario = "root";
 $senha = "";
 $dbNome = "clinica_web";

 $conn = mysqli_connect($servidor, $usuario, $senha, $dbNome);

        if(!$conn){
            die("falha na conexao: " . mysqli_connect_error());
        }else{
            
        }


?>