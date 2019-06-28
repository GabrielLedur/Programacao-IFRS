<?php
    require "src/Pessoa.php";
    $eu = new Pessoa("Gabriel Ledur",17);
    echo $eu->fazAniversario();
    echo "<h1>Nome:</h1>".$eu->getNome();
    echo "<h1>Idade:</h1>".$eu->getIdade();
?>