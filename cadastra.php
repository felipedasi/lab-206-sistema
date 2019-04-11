<?php
require 'conexao.php';
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$projeto = $_POST['projeto'];
$curso = $_POST['curso'];
$senha = $_POST['senha'];
$img = $_FILES['userfile'];
//captura nome da imagem
foreach($img as $vt => $imagem){
    $$vt = $imagem;
}


//UPA A FOTO PARA O DIRETORIO DATA

$uploaddir = 'data/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    
} else {
echo "Erro arquivo inválido!\n";
}
//insere no banco

$qtd= $conm->exec("INSERT INTO dados (id, nome, curso, img, projeto, contato, senha) VALUES (NULL,'$nome','$curso','$name','$projeto','$contato','$senha')");

 
?>