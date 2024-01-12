<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
 <h1>Funções</h1>

 <?php 
 
 function exibirBoasVindas () { // sem retorno// void
    echo 'Bem vindo ao curso de PHP <br/>';
 }

 exibirBoasVindas ();

 function calcularAreaTerreno ($largura, $comprimento) {  // com retorno
    $area = $largura*$comprimento;
    return $area;
 }

 $resultao = calcularAreaTerreno(5,10);

 echo $resultao;
 
 ?>





</body>
</html>