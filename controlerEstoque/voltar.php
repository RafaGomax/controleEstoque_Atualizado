<?php 
    session_start();
    $tipo = $_SESSION['tipo'];

    if($tipo == 1){
        echo "<script>window.location.replace('painelAdm.php');</script>";
    }
    else{
        echo "<script>window.location.replace('painelUsuario.php');</script>";
    } 


?>