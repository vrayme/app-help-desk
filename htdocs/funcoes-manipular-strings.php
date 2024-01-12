<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
 <h1>Funções para manipular strings</h1>
 <?php 
 
 
     $texto = "Curso Completo de PHP!";
     echo $texto . "<hr/>";     
     echo strtolower($texto) ."<hr/>"; // strtolower (variável) para transformar em caixa baixa
     echo strtoupper ($texto) ."<hr/>"; // strtoupper (variável) para transformar em caixa alta
     echo ucfirst ($texto) ."<hr/>"; // ucfirst, transforma a primeira letra em caixa alta
     echo strlen($texto) ."<hr/>"; // equivale ao length, conta a quantidade de caracteres
     echo str_replace("PHP", "JS", $texto)."<hr/>";
     echo substr($texto, 1, 4) . "<br/>";
     echo substr($texto, 6, 8) . "<br/>"; // a contagem dos caracteres começa de 0




 
 ?>

</body>
</html>