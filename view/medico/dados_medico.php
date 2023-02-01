<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedClin medico</title>
    <link href="../../estilo/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body style="background-color: #ffe38f;">

      <?php
         require "../../controle/medico/listar.php";
       ?>

        <!-- navegação-->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../secretaria/painel_secretaria.php">MedClin Painel Administrativo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" >

            <li class="nav-item">
              <a class="nav-link" href="../secretaria/painel_secretaria.php">Sair</a>
            </li>

            </ul>
        </div>
      </div>
    </nav>

    <br><br>

<div class="container-fluid">
 <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-dark collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
          Cadastrar novo medico
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      
        
          <div class="card-body">
             <form action="../../controle/medico/adicionar.php" method="POST">
               <div class="form-group">
                <div class="form-row">
              
                    <div class="col-md-12">
                     <input type="hidden" name="id" value="">
                    </div>

                    <div class="col-md-12">
                      <label >Nome:</label>
                      <input type="text" required class="form-control" id="nome" name="nome" placeholder="nome">
                    </div>

                    <div class="col-md-3">
                      <label>Cpf:</label>
                      <input type="text" class="form-control" name="cpf" placeholder="cpf">
                    </div>

                    <div class="col-md-3">
                      <label>Rg:</label>
                      <input type="text" class="form-control" name="rg" placeholder="rg">
                    </div>

                    <div class="col-md-3">
                      <label>CRM:</label>
                      <input type="text" class="form-control" name="crm" placeholder="crm">
                    </div>

                    <div class="col-md-3">
                      <label>Telefone:</label> 
                      <input  type="text" class="form-control" name="telefone" placeholder="telefone">
                    </div>

                    <div class="col-md-6">
                      <label>Endereço:</label>
                      <input type="text" class="form-control" name="endereco" placeholder="endereço">
                    </div>
                   
                    <div class="col-md-6">
                        <label>sexo:</label>
                        <select class="form-control" name="sexo">
                          <option >Masculino</option> 
                          <option >Feminino</option>
                        </select>
                      </div>

                    <div class="col-md-6">
                      <label>Usuario:</label>
                      <input type="text" class="form-control" name="usuario" placeholder="usuario">
                    </div>

                    <div class="col-md-6">
                      <label>Senha:</label>
                      <input type="password" class="form-control" name="senha" placeholder="senha">
                    </div>
                        
                  </div>
                </div>

              <button class="btn btn-success">Salvar</button>
              <button type="reset" class="btn btn-danger">Limpar</button>

           </form>
         </div>
       </div>
     </div>

       <br>

      <div class="container">
        <form class="form-inline ">
          <input class="form-control col-md-11" type="text" placeholder="Pesquisar por nome" >
          <button class="btn btn-dark" >Buscar</button>
        </form>
      </div>
       <br>
  
    <table class="table table-striped" >
     <thead  class="thead-dark">
       <tr>
         <th scope="col">Nome</th>
         <th scope="col">cpf</th>
         <th scope="col">rg</th>
         <th scope="col">CRM</th>
         <th scope="col">Endereço</th>
         <th scope="col">Telefone</th>
         <th scope="col">sexo</th>
         <th scope="col">Usuario</th>
         <th scope="col">Senha</th>
       
         <th  colspan="2" class="text-center" >Opções</th>
       </tr>
     </thead>
       <tbody>   
       <?php foreach($medicos as $medico): ?>   
            <tr> 
                <td><?php echo $medico->getnome();?></td>
                <td><?php echo $medico->getcpf();?></td>
                <td><?php echo $medico->getrg();?></td>
                <td><?php echo $medico->getcrm();?></td>
                <td><?php echo $medico->getendereco();?></td>
                <td><?php echo $medico->gettelefone();?></td>
                <td><?php echo $medico->getsexo();?></td>
                <td><?php echo $medico->getusuario();?></td>
                <td><?php echo $medico->getsenha();?></td>
                <td> 
                  <a href="../../controle/medico/alterar.php?id=<?php echo $medico->getid(); ?>">
                  <button class="btn btn-warning" name="editar">Alterar</button>
                </td>  
                  </a>
                <td>
                   <a href="../../controle/medico/deletar.php?id=<?php echo $medico->getid(); ?>">
                    <button class="btn btn-danger" name="remover" >Deletar</button>
                    </a>   
                </td>
               </tr>
             <?php endforeach;?>  
        
      </tbody>
    </table>
  </div>      
</div>

    <script src="../../estilo/js/jquery.min.js"></script>
    <script src="../../estilo/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>