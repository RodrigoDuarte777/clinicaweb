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
       <div class="card-header">Alterar medico</div>
         <div class="card-body" style="background-color:gray; color: black; ">

         <form action="alterar.php" method="POST">
            <div class="form-group">
              <div class="form-row">
              
                <div class="form-group">
                  <input type="hidden" name="id"  value="<?php echo $medico->getid();?>">
                </div>

                  <div class="col-md-12">
                    <label >Nome:</label>
                    <input type="text" required class="form-control" name="nome" placeholder="nome" value="<?php echo $medico->getnome();?>">
                  </div>

                  <div class="col-md-6">
                    <label>cpf:</label>
                    <input type="text" class="form-control" name="cpf" placeholder="cnpj" value="<?php echo $medico->getcnpj();?>">
                  </div>

       <div class="col-md-6">
                  <label>sexo: </label> 
                   
                  <select name="sexo" class="form-control"  value="<?php echo $medico->getsexo();?>">
    <option value="0">Masculino</option>
    <option value="1">feminino</option>
     
  </select>
                    </div>
                  <div class="col-md-6">
                      <label>rg:</label>
                      <input type="text" class="form-control" name="rg" placeholder="rg"  value="<?php echo $medico->getrg();?>" >
                    </div>
                 

                  <div class="col-md-6">
                    <label>Endereço:</label>
                    <input type="text" class="form-control" name="endereco" placeholder="endereço" value="<?php echo $medico->getendereco();?>">
                  </div>

                  <div class="col-md-6">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" name="telefone" placeholder="telefone" value="<?php echo $medico->gettelefone();?>">
                  </div>
                  <div class="col-md-6">
                      <label>Usuario:</label>
                      <input type="text" class="form-control" name="usuario" placeholder="usuario" value="<?php echo $medico->getusuario();?>">
                    </div>

                    <div class="col-md-6">
                      <label>Senha:</label>
                      <input type="password" class="form-control" name="senha" placeholder="senha" value="<?php echo $medico->getsenha();?>">
                    
                </div>
                  </div>
                </div>

                

              <button class="btn btn-success">Salvar</button>
              <a href="dados_medico.php">
              <button class="btn btn-danger">Cancelar</button>
              </a>

          </form>
        </div>
      </div>
      </div>
      </div>

</body>
</html>