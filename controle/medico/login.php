<?php
//conexao com banco
require "../../modeloDAO/conexaoLogin.php";

//recebe valores ta tela de login
if(isset($_POST['usuario']) && isset($_POST['senha'])){

      $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
      $senha = base64_encode( mysqli_real_escape_string($conn, $_POST['senha']));
      
      $slq = "SELECT * FROM medicos WHERE usuario = '$usuario' && senha = '$senha'";
      $result = mysqli_query($conn, $slq);
      $resultado = mysqli_fetch_assoc($result);

      if(isset($resultado)){
            header("Location: ../../view/medico/painel_medico.php"); 
      }
      else{
            
            header("Location: ../../view/medico/login_medico.php");
      }
   
}
?>