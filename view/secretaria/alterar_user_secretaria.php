<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
    <link href="../../estilo/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body style=" background: #60a3bc !important;">
  <br><br>

   <div class="container col-md-4">
     <div class="card card-register mx-auto mt-5">
       <div class="card-header">Olá <?php echo $secretaria->getnome();?></div>
         <div class="card-body" style=" background: #f39c12;  ">

         <form action="alterar_user.php" method="POST">
            <div class="form-group">
              <div class="form-row">
              
                  <input type="hidden" name="id"  value="<?php echo $secretaria->getid();?>">

                  <div class="col-md-12">
                    <label>Usuario:</label>
                    <input type="text" class="form-control" name="usuario" placeholder="usuario"  value="<?php echo $secretaria->getusuario();?>">
                  </div>

                  <div class="col-md-12">
                    <label>Senha:</label>
                    <input type="password" required class="form-control" name="senha" placeholder="senha">
                  </div> 
                        
                  </div>
                </div>

              <button class="btn btn-success">Salvar</button>
          </form>
        </div>
        <a href="../../view/secretaria/painel_secretaria.php">
                <button class="btn btn-danger col-md-12">sair</button>
                 </a>
      </div>


</body>
</html>