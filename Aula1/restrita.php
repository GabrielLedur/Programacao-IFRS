<?php
session_start();
if(!isset($_SESSION['usuario'])){ //Bloquear o acesso se não tiver login
    header("location: index.html");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Restrita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css">
</head>
<body>
    <h1>Página Acessada</h1>
    <?php
        echo "Usuario: ".$_SESSION['usuario'].'<BR>';
        echo "Senha: ".$_SESSION['senha'];
    ?>
    <br>
    <br>
    <a href='logout.php' >Sair</a>
</body>
</html>