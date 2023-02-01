<?php

    require "../../modeloDAO/conexaoLogin.php";

      //recebe valores ta tela de login
      if(isset($_POST['senha'])){

            
            $senha = base64_encode( mysqli_real_escape_string($conn, $_POST['senha']));
            
            $slq = "SELECT * FROM secretarias WHERE senha = '$senha'";
            $result = mysqli_query($conn, $slq);
            $resultado = mysqli_fetch_assoc($result);

            if(isset($resultado)){
            
                  require "../../modeloDAO/conexao.php";
                  require "../../modeloDAO/secretariaDAO.php";
                  require "../../modelo/secretaria.php";
            
                  $secretariaDAO = new secretariaDAO($conexao);
                  $secretaria = $secretariaDAO->ValidarSenha($senha);
                  
                  require __DIR__."/../../view/secretaria/alterar_user_secretaria.php";
            
            }
            else{
                  
                  header("Location: ../../view/secretaria/login_alterar_user.php");
            }
      }
