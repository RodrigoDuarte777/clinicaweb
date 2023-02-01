<!DOCTYPE html>
<html lang="pt-br">

  <head>
 <meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../../estilo/css/login.css">
	<link rel="stylesheet" href="../../estilo/css/bootstrap.min.css">
</head>

<body>

  <div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">

			<div class="d-flex justify-content-center">
			   <div class="brand_logo_container">
				  <img src="../../estilo/img/administrador.png" class="brand_logo" alt="Logo">
				</div>
			</div>

	 <br><br><br>
  
			<form action="../../controle/administrador/login_alterar_user.php" method="post">
	   
				<div class="col-md-12">
				<input type="password" name="senha" class="form-control" placeholder="Digite sua senha atual" autofocus required>
				</div>

			<br>

				<button name="button" class="btn btn-success col-md-12">seguir</button>			
								
			</form>
				<br>
					<a href="../../view/administrador/painel_administrador.php">
					<button name="button" class="btn btn-danger col-md-12">Cancelar</button>
					</a>

				</div>
		    </div>
	   </div>

</body>
</html>
