<h1>Inserir novo produto</h1>
<form enctype="multipart/form-data" action="controllers/inserir_produto.php" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
	<div><label>Nome do Produto:</label>
	<input type="text" name="nome_produto" placeholder="Insira o nome do produto"></div><br>

	<div><label>Preço:</label>
	<input type="text" name="preco_produto" placeholder="Insira o preço do produto"></div><br>

	<div><label>Descrição:</label>
	<textarea name="descricao_produto" placeholder="Adicione uma descrição" cols="50" rows="3"></textarea></div><br>

	<div><label>Imagem:</label>
    <input type="file" name="imagem_produto"/></div><br>

    <div><input type="submit" value="SALVAR"/></div>
</form>