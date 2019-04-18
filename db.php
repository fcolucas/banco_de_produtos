<?php 
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$db = 'produtos';

	$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

	$query = "SELECT * FROM PRODUTO";

	$consulta_produtos = mysqli_query($conexao, $query);
 ?>