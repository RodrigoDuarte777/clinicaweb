<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="../estilo/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../estilo/css/usuaris.css">

    <style type="text/css">
    
        body{
            background-image: url(../estilo/img/fu.png);
            }
     
            ul{
              margin:0;
              padding:0;
              list-style:none;
            }

            .our-webcoderskull .cnt-block:hover {
                box-shadow: 4px 4px 10px rgba(0,0,0,0.3);
                border: 0;
            }

            .our-webcoderskull .cnt-block{ 
               float:left; 
               width:100%; 
               background:#fff; 
               padding:30px 20px ; 
               text-align:center; 
               border:2px solid #d5d5d5;
               margin: 0 0 28px;
               margin-left: 150px;            }

            .our-webcoderskull .cnt-block img{ 
               width:160px; 
               height:160px; 
               border-radius:100%; 
            }

            .our-webcoderskull .cnt-block h3{ 
               color:#2a2a2a; 
               font-size:20px; 
               font-weight:500; 
               padding:6px 0;
               text-transform:uppercase;
            }

    </style>

</head>

<body>

     <!-- navegação-->
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">MedClin</a>
      </div>
    </nav>

    <section class="our-webcoderskull padding-lg">
        <div class="container">
            <br><br><br><br><br><br><br>
        <ul class="row">

           

            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="../estilo/img/medico.png" class="img-responsive" alt=""></figure>
                    <h3><a href="medico/login_medico.php">Médico</a></h3>
                </div>
            </li>

            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="../estilo/img/secretaria.jpg" class="img-responsive" alt=""></figure>
                    <h3><a href="secretaria/login_secretaria.php">Secretária</a></h3>
                </div>
            </li>

            
            
            <li class="col-12 col-md-6 col-lg-3">
                <div class="cnt-block equal-hight" style="height: 349px;">
                    <figure><img src="../estilo/img/administrador.png" class="img-responsive" alt=""></figure>
                    <h3><a href="administrador/login_administrador.php">Administrador</a></h3>
                </div>
            </li>
          
       </ul>
    </div>
  </section>


</body>
</html>