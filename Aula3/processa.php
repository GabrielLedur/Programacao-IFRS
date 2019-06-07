<?php
//print_r($_FILES['imagem']);
if(!file_exists($_POST['nome'])){
    mkdir($_POST['nome']);
}
$partes = explode('.',$_FILES['imagem']['name']); //pegar o tipo de arquivo. Exemplo: .jpg,jpeg,pdf...
$ext = end($partes);
$caminho = $_POST['nome']."/"."arquivo_do_".$_POST['nome'].".".$ext; //(nome da pasta / nome do arquivo)
//echo $caminho;
if(move_uploaded_file($_FILES['imagem']['tmp_name'],$caminho)){
    echo "SUCESSO";
}
else{
    echo "FALHOU";
}
?>