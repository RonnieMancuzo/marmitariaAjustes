<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Bebidas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--para ícones customizados-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script><!--para funcionalidades de botões e menu-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--para estilização online-->
</head>
<body style="background-color: #d3222a; color: #ffc82d;">
	<div class="container" style="width: 500px; margin-top: 50px;">
		<h3>Lista de Bebidas</h3>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Bebida</th>
      <th scope="col">Nome Bebida</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  
    <tr>
    	<?php
    	include 'conexao.php';
    	$sql = "SELECT * from 'udemy_crud'";
    	$busca = mysqli_query($conexao, $sql);

    	while ($array = mysqli_fetch_array($busca)){

    		$id_bebida = $array['id_bebida'];
    		$nroBebida = $array['nroBebida'];
    		$nomeBebida = $array['nomeBebida'];
    		$descricaoBebida = $array['descricaoBebida'];
        $precoBebida = $array['precoBebeida'];
    		?>

    		<tr>


      <td><?php echo $nroBebida ?></td>
      <td><?php echo $nomeBebida ?></td>
      <td><?php echo $descricaoBebida ?></td>
      <td><?php echo $precoBebida ?></td>
      <td><a href="editarBebida.php?id=<?php echo $id_bebida ?>" class="btn btn-warning" role="button">Editar</a></td>
      <td><a href="#" class="btn btn-warning" role="button">Excluir</a></td>


  </tr>

  <?php } ?>

    </tr>


</table>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>