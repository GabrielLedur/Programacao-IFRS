<?php
session_start();
if ($_POST['usuario'] =='admin' && $_POST['senha']=='123') {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = $_POST['senha'];
    header("Location: restrita.php");
}else{
    header("Location: index.html");
}
?>