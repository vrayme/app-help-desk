<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de sangue</title>
</head>
<body>
    <?php 
    
    $idade = 23;
    $peso = 96;
    $pode_doar_sangue = false;
    

    if (($idade >= 16 && $idade <=69) && ($peso >= 50)) {
        $pode_doar_sangue = true;
    }
    
    ?>

    <h1>Detalhes do processo</h1>
    <h2>Doação de sangue</h2>

    <p> Resultado:

    <?php 
    
    if ($pode_doar_sangue == true) {
        echo "Atende aos requisitos";
    } else {
        echo "Não atende aos requisitos";
    }
    
    ?>
    </p>

    <p>Idade: <?=$idade ?></p>
    <p>Peso: <?=$peso . " kg"?></p>
    
</body>
</html>