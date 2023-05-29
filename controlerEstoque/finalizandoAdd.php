<?php 
$quantidade = $_POST['quantidade']; 
$item = $_POST['item'];

include("conexao.php");

$sql = "SELECT * FROM item WHERE id = \"$item\"";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $linha = mysqli_fetch_array($result);
    $estoqueItem = $linha['quant_estoque'];
    $add = $quantidade + $estoqueItem; 
}

$sql = "UPDATE item SET quant_estoque = \"$add\" where id = \"$item\"";
if (mysqli_query($conn, $sql)){
   echo "<script>window.confirm('Saldo inserido com sucesso !');</script>";  
   echo "<script>window.location.replace('painelAdm.php');</script>";


}


?>