<?php 
	include '../db.php';
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	
	function do_upload($path, $tmp_file, $filename){
		$date = date("YmdHis");
		$new_name = "{$date}_".$filename;
		move_uploaded_file($tmp_file, $path.$new_name);
		return $new_name;
	}

	$target = "../images/";

	$imagem = do_upload($target, $_FILES['imagem']['tmp_name'], $_FILES['imagem']['name']);

	$query = "INSERT INTO PRODUTO(nome, preco, descricao, imagem) VALUES ('$nome', $preco, '$descricao', '$imagem')";
	
	mysqli_query($conexao, $query) or die(mysqli_error($conexao));

	header('location:../index.php?pagina=listar');
 ?>