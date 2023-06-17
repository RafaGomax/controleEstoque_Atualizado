<?php
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
		.retorno {
            margin-top: -40px;
        }
	</style>

</head>

<body style="background-image: url('fundo-azul-do-gradiente-de-luxo-abstrato-liso-azul-escuro-com-vinheta-preta-studio-banner.jpg'); background-size: cover;">
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Controle de Estoque</a>
			<div class="d-flex justify-content-end">
				<a href="sair.php" class="btn btn-secondary me-3">Sair</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<form action="finalizandoAdd.php" method="POST"><br>

			<h1 class="titulo">Inserção de saldo</h1> 
			
			<input type="hidden" name="item" value="<?php echo $item; ?>">
			<label for="exampleFormControlInput1" class="form-label" class="inp">Quantidade:</label>
			<input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Quantidade a ser adicionada no item" name="quantidade"><br>
			<input type="submit" class="btn btn-secondary me-3" name="Enviar">
			<div class="d-flex justify-content-end mb-5">
				<a href="voltar.php" class="btn btn-secondary me-3 retorno">Voltar</a>
			</div>
		</form>
		
	</div>



</body>

</html>