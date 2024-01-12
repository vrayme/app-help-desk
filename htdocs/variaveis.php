<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <h1>Variaveis</h1>

    <?php 

    //String

    $nome = 'Victor Rayme Silva do Nascimento';

    // int

    $idade = 29;

    // float

    $peso = 85.57;

    // boolean

    $fumante = true; // caso a gente seja "false", no documento fica vazio.

    /*
     
    tag de impressão  

    <?= ?>
    
    */

    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome?> </p>
    <p>Idade: <?= $idade?> </p>
    <p>Peso: <?= $peso?> </p>
    <p>Fumante: <?= $fumante?> </p>



</body>
</html>