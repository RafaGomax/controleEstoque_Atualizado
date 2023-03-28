<?php
session_start();

	unset($_SESSION['nome']);
    unset($_SESSION['id']);
    unset($_SESSION['logged_in']);


    echo "<script> window.confirm('Você foi desconectado com segurança')</script>;";
    echo "<script>window.location.replace('index.php');</script>";  
  

?>