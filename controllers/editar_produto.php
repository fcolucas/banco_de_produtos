<?php
	include 'db.php';

	if(isset($_GET['deletar'])){
		$id = $_GET['deletar'];

		$query = "DELETE FROM PRODUTO WHERE id = $id";

		mysqli_query($conexao, $query);

		header('location:../index.php?pagina=listar');
	}

	$id = $_POST['id'];
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

	$query = "UPDATE PRODUTO SET nome = '$nome', preco = $preco, descricao = '$descricao', imagem = '$imagem' WHERE id = $id";

	mysqli_query($conexao, $query) or die("Algo deu errado ao inserir o registro. Tente novamente.");

	header('location:../index.php?pagina=listar');

?>