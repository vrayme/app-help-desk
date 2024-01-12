<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Estruturas de repetição - while</h1>
  <?php 



  $contador = 1;



  echo "Inicio do loop";
  
  while ($contador < 5) {
     

    //podemos usar o continue, para pular blocos de codigo, ele parte para proxima interação do codigo, nosso exemplo ele iria para outra volta da repetição
    echo " <br/> $contador";
    $contador++;



    /*

    if ($contador == 2 || $contador == 3) {
      continue;
    }
    *?

    


      //dentro das estruturas de repetições, podemos usar o break (para forçar a parda).
      //exemplo
      //break;

      /*

      if ($contador >3) {
        break;
      }
      */
  }

  echo " <br/>";
  echo "Fim do loop";
  
  ?>
    
</body>
</html>