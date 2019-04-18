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
			echo '<tr><td>'.$linha['nome_produto'].'</td>';
			echo '<td>R$ '.$linha['preco_produto'].'</td>';
			echo '<td>'.$linha['descricao_produto'].'</td>';
			echo '<td><img src="'.$linha['imagem_produto'].'"</img></td>';
	?> 
		<td><a href="?pagina=inserir_aluno&editar=<?= $linha['id_aluno']?>"> Editar</a>
			<a href="deleta_aluno.php?id_aluno=<?= $linha['id_aluno']?>"> Deletar</a></td></tr>
	<?php
		}
	?>

</table>