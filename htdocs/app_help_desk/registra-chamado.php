<?php 
/*
echo '<pre>';

print_r($_POST); // através da super global post, vamos recuperar os dados descritos no formulario

echo '</pre>';
*/

session_start(); // abrindo a sessação para ter acesso a variavel global id

$titulo = str_replace('#', '-', $_POST['titulo']); // tratamento de dados, substitução '#' por '-';
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

//$texto = $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'];

$texto =  $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; // texto tratado // contruindo uma string com os dados do post


$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a'); // função fopen espera dois paramentro, nome e o que o arquivo vai fazer atraves de uma vogal

fwrite($arquivo, $texto); // função fwrite espera dois paramentros, o arquivo aberto e o texto que queremos escrever nele

fclose($arquivo); // função para fechar o arquivo

header('Location: abrir_chamado.php')

//echo $texto;


?>