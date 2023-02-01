<!DOCTYPE html>
<html lang="pt-br">

  <head>
 <meta charset="utf-8">
	<title>Login administrador</title>
	<link rel="stylesheet" type="text/css" href="../../estilo/css/login.css">
	<link rel="stylesheet" href="../../estilo/css/bootstrap.min.css">
</head>

<body>

  <div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">

			<div class="d-flex justify-content-center">
			   <div class="brand_logo_container">
				  <img src="../../estilo/img/medico.png" class="brand_logo" alt="Logo">
				</div>
			</div>

	 <br><br><br>

			<form action="../../controle/medico/login.php" method="post">
				<div class="form-group col-md-12">
					<input type="text" name="usuario" class="form-control" placeholder="Usuario" autofocus required>
				</div>

				<div class="col-md-12">
				<input type="password" name="senha" class="form-control" placeholder="Senha" required>
				</div>

			<br>

				<button name="button" class="btn btn-success col-md-12">Entrar</button>			
								
			</form>
				<br>
					<a href="../pagina_usuarios.php">
					<button name="button" class="btn btn-danger col-md-12">Cancelar</button>
					</a>

				</div>
		    </div>
	   </div>

</body>
</html>
