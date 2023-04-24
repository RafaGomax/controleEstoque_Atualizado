<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
	// Redireciona para a página de login
	header('Location: index.php');
	exit;
}


$item = $_GET['id'];


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		body {
			background-color: black;
			color: white;

		}

		.inp {
			width: 30px;
		}

		.titulo {
			text-align: center;
		}

		/*encosta o voltar no canto direito*/
		.voltar {
			margin-left: 1530px;
		}
	</style>

</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body style="background-image: url('fundo-azul-do-gradiente-de-luxo-abstrato-liso-azul-escuro-com-vinheta-preta-studio-banner.jpg'); background-size: cover;">
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Controle de Estoque</a>
			<div class="d-flex justify-content-end">
				<a href="listagemRequisicao.php" class="btn btn-secondary me-3 voltar">Voltar</a>
			</div>
			<div class="d-flex justify-content-end">
				<a href="sair.php" class="btn btn-secondary me-3">Sair</a>
			</div>
		</div>
	</nav><br>
	<form action="finalizarRm.php" method="POST">

		<h1 class="titulo">Dados da Requisição</h1>

		<input type="hidden" name="item" value="<?php echo $item; ?>">


		<label for="exampleFormControlInput1" class="form-label" class="inp">Quantidade:</label>
		<input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Quantidade a ser requisitada" name="quantidade"><br>

		<label for="exampleFormControlInput1" class="form-label" class="inp">Motivo:</label>
		<input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o destino de uso do mateial" name="motivo"><br>

		<input type="submit" name="Gerar Requisição">

	</form>




</body>

</html>