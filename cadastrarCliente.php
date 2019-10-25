<?php

require_once "CLASSES/clientes.php";
$u = new Usuario;// instanciando classe Usuario de clientes.php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Cliente</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o cadastros.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>

<body style="background-color: #d3222a; color: #ffc82d;">
    <div class="container" id="tamanhoContainer" style="width: 500px; margin-top: 50px;">
    	<fieldset>
    		<legend>Cadastrar Cliente</legend>
    		<form name="form" id="form" method="POST">
    			<div class="form-group">
    				<label>Nome</label>
    				<input type="text" name="nome_cliente" id="nome_cliente" class="form-control"placeholder="Nome Completo" maxlength="100">
    			</div>
    			<div class="form-group">
    				<label>E-mail</label>
    				<input type="email" name="email_cliente" id="email_cliente" class="form-control" placeholder="Usuário (e-mail)" maxlength="40">
    			</div>
    			<div class="form-group">
            		<label>Senha</label>
            		<input type="password" name="senha_cliente" id="senha_cliente" class="form-control" placeholder="Senha">        
              	</div>
              	<div class="form-group">
    				<label>Confirmar Senha</label>
    				<input type="" name="confSenha" id="confSenha" class="form-control"placeholder="Confirmar Senha" maxlength="30" required>
    			</div>

    			<input type="submit" name="" value="Cadastrar">
    		</form>
    	</fieldset>

    	<hr>
		<a href="index.php"><button type="submit" class="bt btn-primary">Voltar à tela principal</button></a>
		<hr>

	</div>

	<?php
	//verifica se a pessoa clicou em Cadastrar
	if(isset($_POST['nome_cliente']))
	{
		$nome_cliente = addslashes($_POST['nome_cliente']);
		$email_cliente = addslashes($_POST['email_cliente']);
		$senha_cliente = addslashes($_POST['senha_cliente']);
		$confSenha = addslashes($_POST['confSenha']);
		//verificar se está preenchido
		if(!empty($nome_cliente) && !empty($email_cliente) && !empty($senha_cliente) && !empty($confSenha))
		{
			$u -> conectar("marmitaria", "localhost", "root", "");
			if($u -> msgErro == "")
			{
				if($senha_cliente == $confSenha)
				{
					if($u -> cadastrar($nome_cliente, $email_cliente, $senha_cliente))
						{
							echo "Cadastrado com sucesso.";

						}else{
							echo "Email já cadastrado";
						}
				}
				else
					echo "Senha e confirmar senha não correspondem.";
			}
			else{
				echo "Erro: ".$u -> msgErro;
			}

		} else {
			echo "Preencha todos os campos.";
		}
	}

	?>
	
</body>
</html>