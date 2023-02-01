<?php
//conexao com banco
require "../../modeloDAO/conexaoLogin.php";

//recebe valores ta tela de login
if(isset($_POST['usuario']) && isset($_POST['senha'])){

      $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
      $senha = base64_encode(mysqli_real_escape_string($conn, $_POST['senha']));
      
      $slq = "SELECT * FROM secretarias WHERE usuario = '$usuario' && senha = '$senha'";
      $result = mysqli_query($conn, $slq);
      $resultado = mysqli_fetch_assoc($result);

      if(isset($resultado)){
            header("Location: ../../view/secretaria/painel_secretaria.php"); 
      }
      else{
            
            header("Location: ../../view/secretaria/login_secretaria.php");
      }

}
?>