<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../estilo/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body style="background: #60a3bc !important;">

<br><br>
   <!-- estrutura da pagina, capos que recebem os valores -->

   <div class="container col-md-4">
     <div class="card card-register mx-auto mt-5">
       <div class="card-header">Olá <?php echo $medico->getnome();?></div>
         <div class="card-body" style="background: #f39c12;">

         <form action="alterar_user.php" method="POST" >
            <div class="form-group">
              <div class="form-row">

              <input type="hidden" name="id" value="<?php echo $medico->getid();?>" >
              
                 <div class="col-md-12">
                    <label>Usuario:</label>
                    <input type="text" class="form-control" name="usuario" placeholder="usuario" value="<?php echo $medico->getusuario();?>" required>
                  </div>

                  <div class="col-md-12">
                    <label>Senha:</label>
                    <input type="password" class="form-control" name="senha" placeholder="senha" required>
                  </div>
                        
                  </div>
                </div>

                <button class="btn btn-success">salvar</button>
                
          </form>
        </div>
        <a href="../../view/medico/painel_medico.php">
                <button class="btn btn-danger col-md-12">sair</button>
                 </a>
      </div>

      


</body>
</html>