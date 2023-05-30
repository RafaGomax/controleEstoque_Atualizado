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
	<title>Cadastro de Items</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



	<style type="text/css">
		body {
			background-color: white;
			color: black;

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

<body style="background-image: url('fundo-azul-do-gradiente-de-luxo-abstrato-liso-azul-escuro-com-vinheta-preta-studio-banner.jpg'); background-size: cover;">
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Controle de Estoque</a>
			<div class="d-flex justify-content-end">
				<a href="voltar.php" class="btn btn-secondary me-3 voltar ">Voltar</a>
			</div>
			<div class="d-flex justify-content-end">
				<a href="sair.php" class="btn btn-secondary me-3">Sair</a>
			</div>
		</div>
	</nav>


	<?php

	function gerar_codigo()
	{
		$codigo = '';
		$caracteres = '0123456789';
		$tamanho = 6;

		for ($i = 0; $i < $tamanho; $i++) {
			$codigo .= $caracteres[rand(0, strlen($caracteres) - 1)];
		}

		return $codigo;
	}

	$codigo_gerado = gerar_codigo();

	?>




	<form action="scItem.php" method="POST">
		<div class="container col-6">
			<div class="mb-3"><br>

				<h1 class="titulo">Cadastro de Itens</h1>

				<input type="hidden" name="codigo" value="<?php echo $codigo_gerado; ?>">


				<label for="exampleFormControlInput1" class="form-label" class="inp">Nome:</label>
				<input type="text" class="form-control border border-dark border-1" id="exampleFormControlInput1" placeholder="Nome do item" name="nome"><br>

				<label for="exampleFormControlInput1" class="form-label" class="inp">Descrição:</label>
				<input type="text" class="form-control border border-dark border-1" id="exampleFormControlInput1" placeholder="Descrição detalhada do item" name="descricao"><br>

				<label for="exampleFormControlInput1" class="form-label" class="inp">Valor:</label>
				<input type="number" step="0.01" min="0" class="form-control border border-dark border-1" id="exampleFormControlInput1" placeholder="Custo médio do produto" name="valor"><br>

				<label for="exampleFormControlInput1" class="form-label" class="inp">Estoque inicial:</label>
				<input type="number" class="form-control border border-dark border-1" id="exampleFormControlInput1" placeholder="Quantidade para iniciar o estoque" name="quantEstoque"><br>

				<label for="exampleFormControlInput1" class="form-label" class="inp">Família:</label>
				<input type="text" class="form-control border border-dark border-1" id="exampleFormControlInput1" placeholder="Família do item" name="familia"><br>




				<input type="submit" class="border border-dark border-1" name="enviar">
		</div>
	</form>
	<br>





	</div>
	</form>
</body>

</html>