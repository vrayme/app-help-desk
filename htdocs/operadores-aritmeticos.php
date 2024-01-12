<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
   
<h1>Operadores aritmeticos</h1>

<?php 


$num1 = 10;
$num2 = 2;


echo "A soma entre $num1 e $num2 é igual a: " . ($num1 + $num2);
echo "<hr/>";
echo "A subtração entre $num1 e $num2 é igual a: " . ($num1 - $num2);
echo "<hr/>";
echo "A multiplicação entre $num1 e $num2 é igual a: " . ($num1 * $num2);
echo "<hr/>";
echo "A divisão entre $num1 e $num2 é igual a: " . ($num1/$num2);
echo "<hr/>";
$num1 = 5;
$num2 = 2;
echo "O resto da divisão entre $num1 e $num2 é igual a: " . ($num1%$num2);
echo "<hr/>";


// podemos usar os operadores de atribuição tbm

// +=, -=, *=, /=, %=


$num1 += $num2;  // $num1 =  $num1 + $num2;

echo $num1;






?>




</body>
</html>