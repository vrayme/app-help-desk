<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
   
<h1>Operadores de incremento e decremento</h1>

<h3>Pós-incremento</h3>
<?php 

$valor = 2;

echo "O valor contido na variável é: $valor <hr/>";
echo 'O valor do pós incrementado é: ' . $valor++ . '<hr/>';
echo "O valor atualizado variável/pós incremento é: $valor <hr/>";


?>

<h3>Pré-incremento</h3>
<?php 

$valor = 2;

echo "O valor contido na variável é: $valor <hr/>";
echo 'O valor do pré incrementado é: ' . ++$valor . '<hr/>';
echo "O valor atualizado variável/pós incremento é: $valor <hr/>";


?>

<h3>Pós-decremento</h3>
<?php 

$valor = 2;

echo "O valor contido na variável é: $valor <hr/>";
echo 'O valor no pós decrementado é: ' . $valor-- . '<hr/>';
echo "O valor atualizado variável/pós decremento é: $valor <hr/>";


?>

<h3>Pré-decremento</h3>
<?php 

$valor = 2;

echo "O valor contido na variável é: $valor <hr/>";
echo 'O valor do pré decrementado é: ' . --$valor . '<hr/>';
echo "O valor atualizado variável/pre decremento é: $valor <hr/>";


?>
</body>
</html>