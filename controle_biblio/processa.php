<?php
require getcwd()."\src\Livro.php";

if (isset($_POST['acao'])){
    if ($_POST['acao'] == 'inserir'){
        $p1 = new Livro(null,$_POST['capa'],$_POST['titulo'],$_POST['autor'],$_POST['genero']);
        $p1->inserir();    
    }else if ($_POST['acao'] == 'editar'){
        $p1 = new Livro($_POST['id'],$_POST['capa'],$_POST['titulo'],$_POST['autor'],$_POST['genero']);
        $p1->editar();    
    }
    header("location: lstLivros.php");
}else if (isset($_GET['acao']) && $_GET['acao']=="excluir"){
    Livro::excluir($_GET['id']);   
    header("location: lstLivros.php");
}else{
    header("location: index.php");
}

?>