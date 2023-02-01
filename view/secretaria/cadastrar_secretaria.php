<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
    <link href="../../estilo/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body style="background-color: #E8E8E8;">
  

   <div class="container">
     <div class="card card-register mx-auto mt-5">
       <div class="card-header">Alterar secretaria</div>
         <div class="card-body" style="background-color:gray; color: black; ">

         <form action="alterar.php" method="POST">
            <div class="form-group">
              <div class="form-row">
              
                <div class="form-group">
                  <input type="hidden" name="id"  value="<?php echo $secretaria->getid();?>">
                </div>

                  <div class="col-md-12">
                    <label >Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="nome"  value="<?php echo $secretaria->getnome();?>">
                  </div>

                  <div class="col-md-4">
                    <label>Cpf:</label>
                    <input type="text" class="form-control" name="cpf" placeholder="cpf"  value="<?php echo $secretaria->getcpf();?>" >
                  </div>

                  <div class="col-md-4">
                    <label>Rg:</label>
                    <input type="text" class="form-control" name="rg" placeholder="rg"  value="<?php echo $secretaria->getrg();?>" >
                  </div>

                  <div class="col-md-4">
                    <label>Telefone:</label>
                    <input type="text" class="form-control" name="telefone" placeholder="telefone"  value="<?php echo $secretaria->gettelefone();?>">
                  </div>

                  <div class="col-md-6">
                    <label>Endereço:</label>
                    <input type="text" class="form-control" name="endereco" placeholder="endereço"  value="<?php echo $secretaria->getendereco();?>">
                  </div>

                  
                  <div class="col-md-6">
                    <label>sexo:</label>
                    <select class="form-control" name="sexo"  >
                      <option ><?php echo $secretaria->getsexo();?></option> 
                      <option >Masculino</option> 
                      <option >Feminino</option>
                    </select>
                  </div>

                  </div>
                </div>

              <button class="btn btn-success">Salvar</button>
              <a href="../../view/secretaria/dados_secretaria.php">
              <button class="btn btn-danger">Cancelar</button>
              </a>

          </form>
        </div>
      </div>


</body>
</html>