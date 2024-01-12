<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <h1>Concatenação</h1>

    <?php 

    $nome = "Ney";
    $cor = "Azul";
    $idade = 25;
    $atividade = "Correr";

    // operador . (ponto), para concatenar  // ". $variavel ."
    
    echo "Olá, ". $nome .", vi que sua cor preferida é " . $cor . ", e que você tem ". $idade . " anos e gosta de jogar bola";

    echo "<br/> <hr/>";

    // ou, podemos fazer assim com arpas duplas + nome da varivael 

    echo "Olá $nome,  vi que sua cor preferida é $cor,  e que você tem $idade anos e gosta de $atividade";
    
    ?>

  


</body>
</html>