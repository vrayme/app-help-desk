<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de sangue</title>
</head>
<body>
    <h1>Arrays</h1>
  <?php 
  

  $lista_coisas = [];  // cria uma array principal 

  $lista_coisas ['frutas'] = array (1=>'Maça', 2=>'Cajú', 3=>'Banana'); // dentro do array principal, indice ['nome do outro array'] = array () ou [];
  $lista_coisas ['pessoas'] = [1=> 'Ray', 2=> 'Neymar', 3=> 'Silva', 4=> 'Rayme'];

  $lista_coisas ['funcionarios'] = [$lista_coisas ['pessoas'] [1]];


  echo '<pre>';

  print_r($lista_coisas);

  echo '</pre>';

  echo '<hr/>';

  echo $lista_coisas ['pessoas'] [3];

  echo '<br/>';
  
  echo $lista_coisas ['funcionarios'] [0];

  
  
  ?>
    
</body>
</html>