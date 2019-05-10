<?php
    /*if($_POST['op'] == 'ad'){

        $resultado = $_POST['valor1']+$_POST['valor2'];

    }else if($_POST['op'] == 'sub'){

        $resultado = $_POST['valor1']-$_POST['valor2'];

    }else if($_POST['op'] == 'div'){

        $resultado = $_POST['valor1']/$_POST['valor2'];

    }else{

        $resultado = $_POST['valor1']*$_POST['valor2'];

    }

    echo "<h1>."O resultado é: ".$resultado</h1>"
    */

// Printar operação de funções

//include
//include_once // Só vai incluir este arquivo uma vez
require_once "funcoes.php"; // Vai requirir uma unica vez
//require 

    echo "<h1>".operacao($_POST['valor1'],$_POST['valor2'],$_POST['op'])."<h1>";
?>