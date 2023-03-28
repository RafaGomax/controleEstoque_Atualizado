<?php

	 $item = $_POST['item'];
	 $quantidade = $_POST['quantidade'];
	 $motivo = $_POST['motivo'];
	
	 


	 $sql = "insert requisicao values (null,'$item','$quantidade','$motivo', now());";

	 include("conexao.php"); 

	 if (mysqli_query($conn, $sql)) {
   
	 	$sql = "SELECT * FROM item WHERE id = \"$item\"";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $linha = mysqli_fetch_array($result);
            $quant_estoque = $linha['quant_estoque'];
        }

        $calculo = $quant_estoque - $quantidade;
        $sql = "UPDATE item SET quant_estoque = \"$calculo\" where id = \"$item\"";
        if (mysqli_query($conn, $sql)){
        	$quant_estoque = 0;
        	$quantidade = 0;
        	echo "<script>window.confirm('RM gerada com sucesso!');</script>";
        	echo "<script>window.location.replace('listagemRequisicao.php');</script>";    
        }





    	 
   

    	


	} else {
		echo "<script>window.confirm('Verifique os dados e tente novamente');</script>";   
     	echo "<script>window.location.replace('scRM.php');</script>";   

	}

	// Fecha a conexão com o banco de dados
	mysqli_close($conn);




?>