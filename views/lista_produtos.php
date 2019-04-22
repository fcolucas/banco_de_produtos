<table style="border:1px solid #ccc; width: 100%">
	<tr>
		<th>Nome</th>
		<th>Preço</th>
		<th>Descrição</th>
		<th>Imagem</th>
		<th>Ações</th>
	</tr>

	<?php
		while($linha = mysqli_fetch_array($consulta_produtos)){
			echo '<tr><td>'.$linha['nome'].'</td>';
			echo '<td>R$ '.$linha['preco'].'</td>';
			echo '<td>'.$linha['descricao'].'</td>';
			echo '<td><img src="images/'.$linha['imagem'].'"</img></td>';
	?> 
		<td><a href="?pagina=manter&editar=<?= $linha['id']?>"> Editar</a>
			<a href="controllers/editar_produto.php?deletar=<?= $linha['id']?>"> Deletar</a></td></tr>
	<?php
		}
	?>

</table>