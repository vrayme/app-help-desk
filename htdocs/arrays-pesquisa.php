<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de sangue</title>
</head>
<body>
    <h1>Arrays - funções para pesquisar</h1>
  <?php 
  

  //in_array(); // true ou false para o que esta sendo procurado // retorno: true = 1 e false = vazio
 // array_search(); // retorna o indice do valor pesquisado, caso ele exista // retorno: true = 1 e false/null = vazio

  $listaFrutas = array ('Maça', 'Banana', 'Laranja');

  /*

  echo '<pre>';

  print_r($listaFrutas);

  echo '</pre>';

  echo '<hr/>';
  *?


  // echo in_array('Banana', $listaFrutas); // retorno: true = 1


  //$existe = array_search('Uva', $listaFrutas);




  //$existe =  in_array('Banana', $listaFrutas);  // in_array('Valor procurado', 'Nome do array da pesquisA'); 

  /*

  if ($existe != null) {
    echo 'Sim, o valor procurado existe dentro do array';
  } else {
    echo 'Não, o valor procurado não existe dentro do array';
  }
  */

  // com array multidimencional

  $listaCoisas = ['frutas' => $listaFrutas, 
  'pessoas' => ['João', 'Neymar', 'Bruna']];

  echo '<pre>';

  print_r($listaCoisas);

  echo '</pre>';

  echo '<hr/>';


  echo in_array('João', $listaCoisas ['pessoas']); // Valor pesquisado, nome do array principal [nome do outro array].








  
  ?>
    
</body>
</html>