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
  
  // array sequenciais
  $listaFrutas = array ('Banana', 'Laranja', 'Maçã'); // $variavel = array (); ou  $variavel = [];

  $listaFrutas [] = 'Caju'; // incluindo mais um elemento no array

  echo '<pre>';
    var_dump($listaFrutas); // var_dump ($array); // função nativa do php para debugar array
  echo '</pre>';
  echo '<hr>';
  echo '<pre>';
  print_r($listaFrutas); // print_r($array); // função nativa do php para debugar array de forma mais simples do que o var_dump
echo '</pre>';


// array associativos // indices personalizados // =>
$listaFrutas1 = [ 'a' => 'Maça',  'b' => 'Manga',  'c' => 'Morango',  'd' => 'Uva',  'e' => 'Cacau']; 

$listaFrutas1 ['c1'] = 'Abobora'; // incluindo mais um elemento no array

echo '<pre>';
    var_dump($listaFrutas1); 
  echo '</pre>';

  echo '<pre>';
    print_r($listaFrutas1); 
  echo '</pre>';





  
  
  ?>
    
</body>
</html>