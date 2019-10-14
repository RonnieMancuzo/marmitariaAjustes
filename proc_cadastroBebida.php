<?php

session_start();

include_once ("conexao.php");

$nro_bebida = filter_input(INPUT_POST, 'nro_bebida', FILTER_SANITIZE_NUMBER_INT);
$nome_bebida = filter_input(INPUT_POST, 'nome_bebida', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuarios = "INSERT INTO bebida (nro_bebida, nome_bebida, descricao) VALUES ('$nro_bebida', '$nome_bebida', '$descricao')";

$resultado_usuario = mysqli_query($conn, $result_usuarios);

if (mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style = 'color: green; background:white;'><b>Bebida inserida com sucesso.<b></p>";
	header("Location: cadastroBebida.php");
}else{
	$_SESSION['msg'] = "<p style = 'color: red; background:white;'><b>Erro ao inserir.<b></p>";
	header("Location: cadastroBebida.php");
}

?>