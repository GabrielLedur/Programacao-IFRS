<?php
require getcwd()."\src\Livro.php";

$livros = Livro::listaTodos();

$generos[1]="Ação";
$generos[2]="Romance";
$generos[3]="Biografia";
$generos[4]="Ficção Científica";


if ($livros!=false){
    echo "<table>";
echo "<tr>";
echo "<td>Título</td>";
echo "<td>Capa</td>";
echo "<td>Autor</td>";
echo "<td>Gênero</td>";
echo "<td>Opções</td>";
echo "</tr>";
foreach($livros as $lv){
    echo "<tr>";
    echo "<td>".$lv->titulo."</td>";
    echo "<td>".$lv->capa."</td>";
    echo "<td>".$lv->autor."</td>";
    echo "<td>".$generos[$lv->genero]."</td>";
    echo "<td> <a href='formEditLivro.php?id=".$lv->id."'>Editar </a></td>";
    echo "<td> <a href='processa.php?acao=excluir&id=".$lv->id."'>Excluir </a></td>";
    echo "</tr>";
}
echo "</table>";
}else{
    echo "Não há nenhum registro";
}







