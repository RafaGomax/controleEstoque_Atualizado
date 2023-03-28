<?php
    include_once "conexao.php";
    
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM requisicao WHERE id = " . $_GET['id'];
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $linha = mysqli_fetch_array($result);
            $item = $linha['cod_item'];
            $quant = $linha['quant'];

            $sql = "SELECT * FROM item WHERE id = \"$item\"";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $linha = mysqli_fetch_array($result);
                $estoqueItem = $linha['quant_estoque'];
                $estoque_final = $quant + $estoqueItem;
            }



             $sql = "UPDATE item SET quant_estoque = \"$estoque_final\" where id = \"$item\"";
             if (mysqli_query($conn, $sql)){
                $sql = "DELETE FROM requisicao WHERE id = " . $_GET['id'];
                mysqli_query($conn, $sql);
                echo "<script>window.confirm('Requisição deletada com sucesso');</script>";  
                echo "<script>window.location.replace('excluirRequisicao.php');</script>";


            }

        }

    }
?>