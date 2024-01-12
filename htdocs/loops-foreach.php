<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Foreach</h1>
  <?php 


  $itens = ['Mesa', 'Sofá', 'Geladeira', 'Cama', 'Guarda roupas'];

  echo '<pre>';


  print_r($itens);

  echo '</pre>';


  foreach ($itens as $item) {  // passa o nome do $array   as   $variavel que vai ler/receber todos os indices do array

    echo "$item ";

    /*

    if ($item == 'Mesa') {
        echo " (*Compre uma mesa e 4 cadeiras e ganhe 25% de desconto)";
    }
    */

    echo "<br/>";

  }
  
  ?>
    
</body>
</html>