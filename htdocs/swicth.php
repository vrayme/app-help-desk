<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de sangue</title>
</head>
<body>
   
<h1>Swicth</h1>


    <?php 

    // a comparação é feita por igualdade, exemplo 2 == "2", e não por indetidade

    $paramentro = 2;
    
    switch ($paramentro) {
        case 1:
            echo "Entrou no case 1";
            break;
        case 2:
            echo "Entrou no case 2";
            break;
        default:
            echo "Entrou no default";
            break;
    }
    
    
    ?>


</body>
</html>