<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redireciona para a página de login
    header('Location: index.php');
    exit;
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Controler Estoque</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
	integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		
		body{
			text-align: center;
			background: black;
			color: white;
		}


	</style>

</head>
<body>
	<br><br>
	<a href="sair.php">Sair</a>
	<h1>Painel do Usuário</h1><br><br>

	<a href="cadastroItem.php" type="button" class="btn btn-primary">Cadastrar Item</a><br><br>
	<a href="listagemItem.php" type="button" class="btn btn-primary">Pesquisar de Item</a><br><br>
	<a href="listagemRequisicao.php" type="button" class="btn btn-success">Registrar requisição</a><br><br>
	<a href="excluirRequisicao.php" type="button" class="btn btn-success">Excluir requisição</a><br><br>

</body>
</html>