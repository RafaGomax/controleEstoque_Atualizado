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

	<link rel="stylesheet" href="style.css"> <!-- Adiciona o arquivo CSS -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		body {
			background: white;
			color: white;
		}

		.retangulo {
			max-width: 450px;
			margin: 0 auto;
			background-color: #2f4f4f;
			padding: 15px;
			padding-bottom: 20px;
			margin-top: 50px;
			border-radius: 10px;
			margin-bottom: 100px;
		}

		/*Define o tamanho dos liks nas telas principais */
		.tam {
			width: 200px;
		}
	</style>

</head>


<body style="background-image: url('fundo-azul-do-gradiente-de-luxo-abstrato-liso-azul-escuro-com-vinheta-preta-studio-banner.jpg'); background-size: cover;">
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"> 
				<img src="/controlerEstoque/logo.png" width="100" height="30" alt="Logo da página">
			</a>
			<div class="d-flex justify-content-end">
				<a href="sair.php" class="btn btn-secondary me-3">Sair</a>
			</div>
		</div>
	</nav>

	<div class="retangulo">
		<div class="container mt-4 text-center">
			<h1>Painel do Administrador</h1>
			<br><br>
			<a href="cadastroItem.php" type="button" class="btn btn-info tam">Cadastrar Item</a><br><br>
			<a href="cadastroUsuario.php" type="button" class="btn btn-info tam">Cadastrar Usuario</a><br><br>
			<a href="adcionarSaldo.php" type="button" class="btn btn-info tam">Adicionar Saldo</a><br><br>
			<a href="listagemRequisicao.php" type="button" class="btn btn-warning tam">Registrar requisição</a><br><br>
			<a href="listagemItem.php" type="button" class="btn btn-warning tam">Pesquisar Item</a><br><br>
			<a href="excluirItem.php" type="button" class="btn btn-danger tam">Excluir Item</a><br><br>
			<a href="excluirUsuario.php" type="button" class="btn btn-danger tam">Excluir Usuario</a><br><br>
			<a href="excluirRequisicao.php" type="button" class="btn btn-danger tam">Excluir Requisição</a><br><br>


		</div>
	</div>

</body>

</html>