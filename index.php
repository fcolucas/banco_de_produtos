<?php

include 'db.php';

include 'header.php';

if(isset($_GET['pagina'])) $pagina = $_GET['pagina'];
else $pagina = 'home';

switch ($pagina) {
	case 'inserir':
		include 'views/manter_produto.php';
		break;
	case 'listar':
		include 'views/lista_produtos.php';
		break;
	default:
		include 'views/home.php';
		break;
}