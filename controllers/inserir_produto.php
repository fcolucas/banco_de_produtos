<?php 
	include '../db.php';

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$imagem = $_FILES['imagem']['name'];

	$target = "images/".basename($_FILES['imagem']['name']);

	$query = "INSERT INTO PRODUTO(nome, preco, descricao, imagem) VALUES ('$nome', $preco, '$descricao', '$imagem')";

	print($query);

	mysqli_query($conexao, $query) or die("Algo deu errado ao inserir o registro. Tente novamente.");

	if(move_uploaded_file($_FILES['imagem']['tmp_name'], $target)){
		echo "Dados inseridos com sucesso!";
	}else echo "Houve um problema com a inserção dos dados";

	
	#header('location:../index.php?pagina=listar');

 ?>