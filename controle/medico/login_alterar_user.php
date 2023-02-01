<?php
//conexao com banco
require "../../modeloDAO/conexaoLogin.php";

//recebe valores ta tela de login
if(isset($_POST['senha'])){

      $senha = base64_encode( mysqli_real_escape_string($conn, $_POST['senha']));
      
      $slq = "SELECT * FROM medicos WHERE senha = '$senha'";
      $result = mysqli_query($conn, $slq);
      $resultado = mysqli_fetch_assoc($result);

      if(isset($resultado)){
           
            require "../../modeloDAO/conexao.php";
            require "../../modeloDAO/medicoDAO.php";
            require "../../modelo/medico.php";
      
            $medicoDAO = new medicoDAO($conexao);
            $medico = $medicoDAO->ValidarSenha($senha);
            
            require __DIR__."/../../view/medico/alterar_user_medico.php";
           
      }
      else{
            
            header("Location: ../../view/medico/login_alterar_user.php");
      }

}
?>