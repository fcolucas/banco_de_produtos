<?php
if(!isset($_GET['editar'])){
?>
	<h1>Inserir novo produto</h1>
	<form enctype="multipart/form-data" action="controllers/inserir_produto.php" method="post">
		<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
		<div><label>Nome do Produto:</label>
		<input type="text" name="nome" placeholder="Insira o nome do produto"></div><br>

		<div><label>Preço:</label>
		<input type="text" name="preco" placeholder="Insira o preço do produto"></div><br>

		<div><label>Descrição:</label>
		<textarea name="descricao" placeholder="Adicione uma descrição" cols="50" rows="3"></textarea></div><br>

		<div><label>Imagem:</label>
	    <input type="file" required name="imagem"/></div><br>
	    <div><input type="submit" value="SALVAR"/></div>
	</form>

<?php } 
else{
	while($linha = mysqli_fetch_array($consulta_produtos)){
		if($linha['id'] == $_GET['editar']){
	?>
			<h1>Editar produto</h1>
			<form enctype="multipart/form-data" action="controllers/editar_produto.php" method="post">
				<input type="hidden" name="id" value="<?= $linha['id']?>">
				<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
				<div><label>Nome do Produto:</label>
				<input type="text" name="nome" value="<?= $linha['nome']?>" placeholder="Insira o nome do produto"></div><br>

				<div><label>Preço:</label>
				<input type="text" name="preco" value="<?= $linha['preco']?>" placeholder="Insira o preço do produto"></div><br>

				<div><label>Descrição:</label>
				<textarea name="descricao" placeholder="Adicione uma descrição" cols="50" rows="3"><?= $linha['descricao']?></textarea></div><br>

				<div><label>Imagem:</label>
			    <input type="file" required value="<?= $linha['imagem']?>" name="imagem"/></div><br>

			    <div><input type="submit" value="EDITAR"/></div>
			</form>	
<?php }
	}
} ?>