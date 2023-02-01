<?php
//conexao com banco
require "../../modeloDAO/conexaoLogin.php";

//recebe valores ta tela de login
if(isset($_POST['senha'])){

      $senha = md5( mysqli_real_escape_string($conn, $_POST['senha']));
      
      $slq = "SELECT * FROM administradores WHERE senha = '$senha'";
      $result = mysqli_query($conn, $slq);
      $resultado = mysqli_fetch_assoc($result);

      if(isset($resultado)){
           
            require "../../modeloDAO/conexao.php";
            require "../../modeloDAO/administradorDAO.php";
            require "../../modelo/administrador.php";
      
            $administradorDAO = new administradorDAO($conexao);
            $administrador = $administradorDAO->ValidarSenha($senha);
            
            require __DIR__."/../../view/administrador/alterar_user_administrador.php";
           
      }
      else{
            
            header("Location: ../../view/administrador/login_alterar_user.php");
      }

}
?>