<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
   
<h1>Conversão de tipos de variáveis</h1>

<?php 



                // função: gettype(), retorna o tipo da variável


                $valor = 10;
               
                //$valor2 = (float) $valor; // conversão de int para float/double 
                $valor2 = (string) $valor; // conversão de int para string


                // sintAXE


                // $variavel  = (tipo que deseja converter) $variavel (que vai ser convertida)




                echo $valor .' '. gettype($valor);
                echo '<hr/>';
                echo $valor2 .' '. gettype($valor2);



?>




</body>
</html>