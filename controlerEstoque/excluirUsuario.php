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

$sql = "SELECT * FROM usuario";
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
	<title>Lista de Usuário</title>
</head>
<body>
	<a href="sair.php">Sair</a>
	<h1>Lista de Dados</h1>

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
			<th>Tipo</th>
			<th>Email</th>
			<th>Exclusão</th>

		</tr>


		<?php while($row = mysqli_fetch_array($result)): ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nome']; ?></td>
				<td><?php echo $row['tipo']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><a href="deletaUsuario.php?id=<?php echo $row['id'];?>" class="text-danger">Deletar</a></td>

				
			</tr>
		<?php endwhile; ?>
	</table>

</body>
</html>

<?php
mysqli_close($conn);
?>