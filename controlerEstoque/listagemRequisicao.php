<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
	// Redireciona para a página de login
	header('Location: index.php');
	exit;
}


?>

<?php

include("conexao.php");

$sql = "SELECT * FROM item";
$result = mysqli_query($conn, $sql);

if (isset($_POST['search'])) {
	$search_term = mysqli_real_escape_string($conn, $_POST['search']);
	$sql .= " WHERE nome LIKE '%{$search_term}%'";
	$result = mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de Dados</title>

	<link rel="stylesheet" href="style.css"> <!-- Adiciona o arquivo CSS -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		body {
			color: black;
		}

		/*encosta o voltar no canto direito*/
		.voltar {
			margin-left: 1530px;
		}

		h1{
			text-align: center;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Controle de Estoque</a>
			<div class="d-flex justify-content-end">
				<a href="sair.php" class="btn btn-secondary me-3">Sair</a>
			</div>
		</div>
	</nav><br>
	<h1>Lista de Dados</h1><br><br>

	<div class="container">
		<form method="post">
			<label for="search">Pesquisar por nome:</label>
			<input type="text" name="search" id="search">
			<input type="submit" value="Pesquisar">
		</form><br>

		<!-- Criar uma tabela HTML para exibir os dados -->
		
		
		<table class="table table-striped table-bordered table-condensed table-hover">
			<tr>
				<th class="p-3 text-center">Id</th>
				<th class="p-3 text-center">Nome</th>
				<th class="p-3 text-center">Descrição</th>
				<th class="p-3 text-center">Valor Médio</th>
				<th class="p-3 text-center">Estoque Atual</th>
				<th class="p-3 text-center">Família</th>
				<th class="p-3 text-center">Requisitar</th>
			</tr>


			<?php while ($row = mysqli_fetch_array($result)) :

			?>


				<tr>
					<td>
						<?php echo $row['id']; ?>
					</td>
					<td>
						<?php echo $row['nome']; ?>
					</td>
					<td>
						<?php echo $row['descricao']; ?>
					</td>
					<td>
						<?php echo $row['valor']; ?>
					</td>
					<td>
						<?php echo $row['quant_estoque']; ?>
					</td>
					<td>
						<?php echo $row['familia']; ?>
					</td>
					<td><a href="tratarRm.php?id=<?php echo $row['id']; ?>" class="text-danger p-3">Gerar Rm</a></td>
				</tr>
			<?php endwhile; ?>
		</table>
		<div class="d-flex justify-content-end mb-5">
			<a href="voltar.php" class="btn btn-secondary me-3 retorno">Voltar</a>
		</div>

	</div>
 
</body>

</html>

<?php
mysqli_close($conn);
?>