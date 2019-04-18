<?php 
	include '../db.php';

	$nome = $_POST['nome_produto'];
	$preco = $_POST['preco_produto'];
	$descricao = $_POST['descricao_produto'];
	$imagem = $_FILES['imagem_produto']['tmp_name'];
	$tamanho = $_FILES['imagem_produto']['size'];

/*	echo $nome.'<br \>';
	echo $preco.'<br \>';
	echo $descricao.'<br \>';
	echo $imagem;*/

	if ($imagem != "none"){
    	$fp = fopen($imagem, "rb");
     	$conteudo = fread($fp, $tamanho);
      	$conteudo = addslashes($conteudo);
      	fclose($fp);
    	
    	$query = "INSERT INTO PRODUTO(nome_produto, preco_produto, descricao_produto, imagem_produto) VALUES ('$nome', $preco, '$descricao', $conteudo)";

    	mysqli_query($conexao, $query) or die("Algo deu errado ao inserir o registro. Tente novamente.");

    	header('location:../index.php?pagina=listar');

    	if(mysql_affected_rows($conexao) > 0) print "Dados inseridos com sucesso!";
    	else print "Não foi possível salvar os dados!";
   	}else print "Não foi possível carregar a imagem.";

 ?>