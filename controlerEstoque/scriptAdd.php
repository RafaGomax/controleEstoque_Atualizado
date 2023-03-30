<?php 
    $item = $_GET['id'];
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
	integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		
		body{
			background-color: black;
			color: white;

		}

		.inp{
			width: 30px;
		}

		.titulo{
			text-align: center;
		}
	</style>

</head>
<body>
	<a href="sair.php">Sair</a>
	<form action="finalizandoAdd.php" method="POST">

			<h1 class="titulo" >Insersão de saldo</h1>

			<input type="hidden" name="item" value="<?php echo $item;?>"> 
  			<label for="exampleFormControlInput1" class="form-label" class="inp">Quantidade:</label>
 			<input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Quantidade a ser adicionada no item" name="quantidade"><br>
 			<input type="submit" name="Inserir salto">
		
	</form>




</body>
</html>