<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
 <h1>Calculo de imposto de renda</h1>

 <?php 
 
 function calcularImpostoDeRenda ($salario) {

    if ($salario <= 1903.98) {
        $valor = 'Isento';
    } else if ($salario >= 1903.98 && $salario < 2826.65) {
        $valor = ($salario*7.5)/100;
    }
    else if ($salario >= 2826.65 && $salario < 3751.05) {
        $valor = ($salario*15)/100;
    }
    else if ($salario >= 3751.05 && $salario < 4664.68) {
        $valor = ($salario*22.5)/100;
    }
    else if ($salario >= 4664.68) {
        $valor = ($salario*27.5)/100;
    }
    
    return $valor;
 }

    $resultado = calcularImpostoDeRenda (3500.75);

 ?>

 <p>Imposto a ser pago: <?= $resultado; ?></p>







</body>
</html>