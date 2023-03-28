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

if(isset($_POST['search'])) {
  $search_term = mysqli_real_escape_string($conn, $_POST['search']);
  $sql .= " WHERE nome LIKE '%{$search_term}%'";
  $result = mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lista de Dados</title>
</head>
<body>
	<a href="sair.php">Sair</a>
	<h1>Gerador de Requisição</h1>

	<form method="post">
		<label for="search">Pesquisar por nome:</label>
		<input type="text" name="search" id="search">
		<input type="submit" value="Pesquisar">
	</form>

	<!-- Criar uma tabela HTML para exibir os dados -->
	<table>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Descrição</th>
			<th>Valor Médio</th>
			<th>Estoque Atual</th>
			<th>Família</th>
			<th>Requisitar</th>
		</tr>


		<?php while($row = mysqli_fetch_array($result)): 

			?>
			

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nome']; ?></td>
				<td><?php echo $row['descricao']; ?></td>
				<td><?php echo $row['valor']; ?></td>
				<td><?php echo $row['quant_estoque']; ?></td>
				<td><?php echo $row['familia']; ?></td>
				<td><a href="tratarRm.php?id=<?php echo $row['id'];?>" class="text-danger">Gerar Rm</a></td>
			</tr>
		<?php endwhile; ?>
	</table>

</body>
</html>

<?php
mysqli_close($conn);
?>