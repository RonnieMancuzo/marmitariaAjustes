<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "marmitaria";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conn){
	echo 'esso ao conectar';
	die();
}
?>