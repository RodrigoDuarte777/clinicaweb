<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>MedCli </title>
  <link href="../../estilo/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../estilo/css/painel.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
  
      <div class="logo">
        <a href="#  " class="simple-text logo-normal">
          <div class="logo-image-big">
            <img src="../../estilo/img/medico.png">
          </div> 
        </a>
      </div>
      
      <div class="sidebar-wrapper">
        <ul class="nav">
          
        <li class="active ">
            <a href="#">
              <p>Painel Médico</p>
            </a>
          </li>
          
          <li>
            <a href="login_alterar_user.php">
              <p>Alerar usuario e senha</p>
            </a>
          </li>

          <li>
            <a href="../pagina_usuarios.php">
              <p>sair</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">Painel MedClin</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

   <br><br><br><br><br>
      <div class="container-fluid">
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
              <div class="card-body">
                <div class="mr-5">Consultas</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span  class="float-left">Ver Dados</span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="mr-5">Agenda</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver Dados</span>
              </a>
            </div>
          </div>
      
      
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="mr-5">Pacientes</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver Dados</span>
              </a>
            </div>
          </div>
      
        
      
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-body">
                <div class="mr-5">Tabela CID</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ver Dados</span>
              </a>
            </div>
          </div>
            
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-black bg-light o-hidden h-100">
              <div class="card-body">
                <div class="mr-5">Outro</div>
              </div>
              <a class="card-footer text-black clearfix small z-1" href="#">
                <span class="float-left">Ver Dados</span>
              </a>
            </div>
          </div>

          </div>
          </div>

        
   
  <!--   Core JS Files   -->
  <script src="../../estilo/js/jquery.min.js"></script>
  <script src="../../estilo/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>