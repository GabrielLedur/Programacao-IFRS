<?php
    require getcwd()."\src\Livro.php";
    $lv = new Livro($_GET['id']);
    $lv->listaUm();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir Livro</title>
</head>
<body>
    <form method='post' action='processa.php'>
    <?php
        echo "<input type='hidden' name='id' value=".$lv->id.">";
        echo "Capa: <input type='text' name='capa' value='".$lv->capa."'><br>";
    ?>
    <?php
        echo "Titulo: <input type='text' name='titulo' value='".$lv->titulo."'><br>";
    ?>
    <?php
        echo "Autor: <input type='text' name='autor' value='".$lv->autor."'><br>";
    ?>
        Gênero: <select name='genero'>
            <?php
                if($lv->tipo ==1){
                    echo "<option value='1' selected>Ação</option>";
                }else{
                    echo "<option value='1'>Ação</option>";
                }
                if($lv->tipo ==2){
                    echo "<option value='2' selected>Romance</option>";
                }else{
                    echo "<option value='2'>Romance</option>";
                }
                if($lv->tipo ==3){
                    echo "<option value='3' selected>Biografia</option>";
                }else{
                    echo "<option value='3'>Biografia</option>";
                }
                if($lv->tipo ==4){
                    echo "<option value='4' selected>Ficção Científica</option>";
                }else{
                    echo "<option value='4'>Ficção Científica</option>";
                }
            ?>
            </select> 
        <button name = 'acao' value='editar' type='submit'>Editar</button>
    </form>
</body>
</html>