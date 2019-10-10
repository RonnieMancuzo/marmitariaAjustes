<!DOCTYPE html>
<html>
<head>
	<title>Login Cliente</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o login.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>
<body style="background-color: #d3222a; color: #ffc82d;">

	<div class="container" style="width: 500px; margin-top: 50px;">
		<h3>Bem vindo, cliente! Está com fome?</h3>
		<form>
			<div class="form-group">
				<label for="exampleInputEmail1">E-mail</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira o E-mail">
			</div>
			<div class="form-group">
    			<label for="exampleInputPassword1">Senha</label>
    			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
  			</div>
  			<!--LIBERAR FUNCIONALIDADE CARRINHO NO PHP----------------------------->
  			<button type="submit" class="btn btn-dark"><a href="index.php">Entrar</button>
		</form>
	</div>

</body>
</html>