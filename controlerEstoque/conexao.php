<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "Phas2001"; 
	$dbname = "estoque";
	
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if (!$conn) {
    die('Falha na conexão com o banco de dados: ' . mysqli_connect_error());
	
	}

?>