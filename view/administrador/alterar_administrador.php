<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../estilo/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body style="background-color:#ffe38f;">
   <!-- estrutura da pagina, capos que recebem os valores -->
  
   <div class="container">
     <div class="card card-register mx-auto mt-5">
       <div class="card-header">Alterar Adminstrador</div>
         <div class="card-body" style="background-color:gray; color: black; ">

         <form action="alterar.php" method="POST">
            <div class="form-group">
              <div class="form-row">
              
                <div class="form-group">
                  <input type="hidden" name="id"  value="<?php echo $administrador->getid();?>">
                </div>

                  <div class="col-md-12">
                    <label >Nome:</label>
                    <input type="text" required class="form-control" name="nome" placeholder="nome" value="<?php echo $administrador->getnome();?>">
                  </div>

                  <div class="col-md-6">
                    <label>Cnpj:</label>
                    <input type="text" class="form-control" name="cpf" placeholder="cnpj" value="<?php echo $administrador->getcnpj();?>">
                  </div>

                
                 

                  <div class="col-md-6">
                    <label>Endereço:</label>
                    <input type="text" class="form-control" name="endereco" placeholder="endereço" value="<?php echo $administrador->getendereco();?>">
                  </div>

                  <div class="col-md-6">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" name="telefone" placeholder="telefone" value="<?php echo $administrador->gettelefone();?>">
                  </div>
                  <div class="col-md-6">
                      <label>Usuario:</label>
                      <input type="text" class="form-control" name="usuario" placeholder="usuario" value="<?php echo $administrador->getusuario();?>">
                    </div>

                    <div class="col-md-6">
                      <label>Senha:</label>
                      <input type="password" class="form-control" name="senha" placeholder="senha" value="<?php echo $administrador->getsenha();?>">
                    
                </div>
                  </div>
                </div>

                

              <button class="btn btn-success">Salvar</button>
              <a href="dados_administrador.php">
              <button class="btn btn-danger">Cancelar</button>
              </a>

          </form>
        </div>
      </div>


</body>
</html>