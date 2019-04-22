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
	$imagem = $_FILES['imagem']['name'];
	$tamanho = $_FILES['imagem']['size'];

	$target = 'images/'.basename($imagem);

	$query = "UPDATE PRODUTO SET nome = '$nome', preco = $preco, descricao = '$descricao', imagem = '$imagem' WHERE id = $id";

	mysqli_query($conexao, $query) or die("Algo deu errado ao inserir o registro. Tente novamente.");

	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg = "Dados inseridos com sucesso!";
	}else $msg = "Houve um problema com a inserção dos dados";

	header('location:../index.php?pagina=listar');

?>