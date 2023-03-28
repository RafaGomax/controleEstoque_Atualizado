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

$sql = "SELECT * FROM requisicao";
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
	<h1>Lista de RM</h1>

	<form method="post">
		<label for="search">Pesquisar por nome:</label>
		<input type="text" name="search" id="search">
		<input type="submit" value="Pesquisar">
	</form>

	<!-- Criar uma tabela HTML para exibir os dados -->
	<table>
		<tr>
			<th>Id</th>
			<th>Cod. Item</th>
			<th>Quantidade</th>
			<th>Motivo</th>
			<th>Exclusão</th>
		</tr>


		<?php while($row = mysqli_fetch_array($result)): 

			?>
			

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['cod_item']; ?></td>
				<td><?php echo $row['quant']; ?></td>
				<td><?php echo $row['motivo']; ?></td>
				<td><a href="deletaRm.php?id=<?php echo $row['id'];?>" class="text-danger">Deletar</a></td>
			</tr>
		<?php endwhile; ?>
	</table>

</body>
</html>

<?php
mysqli_close($conn);
?>