<?php
include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Prato</title>
	<link rel="stylesheet" href="css/bootstrap.css"><!--para estilização responsiva Bootstrap-->
	<!--fazer CSS próprio para o cadastros.php => <link rel= "stylesheet" href="css/style.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->

</head>
<body style="background-color: #d3222a; color: #ffc82d;">
	<div class="container" id="tamanhoContainer" style="width: 500px; margin-top: 50px;">
		<h4>Cadastrar</h4>
		<form action="inserirPrato.php" method="POST">
			<?php

			$sql = "SELECT * from 'udemy_crud' WHERE id_prato = $id";
			$buscar = mysqli_query($conexao, $sql);
			while ($array = mysqli_fetch_array($buscar)){
				$id_prato = $array['id_prato'];
    		$nroPrato = $array['nroPrato'];
    		$nomePrato = $array['nomePrato'];
    		$ingredientes = $array['ingredientes'];
			?>
			<fieldset class="border p-2">
				<legend  class="w-auto">Prato</legend>
				<div class="form-group">
					<label>Número do prato:</label>
					<input type="number" class="form-control" id="nro_prato" name="nro_prato">
					<label>Nome:</label>
					<input type="text" class="form-control" id="nome_prato" name="nome_prato">
					<label>Ingredientes:</label>
					<textarea class="form-control" id="ingredientes" name="ingredientes" rows="3"></textarea>
				</div>
			</fieldset>
			<button type="submit" class="btn btn-primary">Inserir</button>
		<?php } ?> 
		</form>
	</div>

</body>
</html>
