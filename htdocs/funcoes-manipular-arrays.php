<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Funçoes para manipular arrays</h1>
  <?php 

  
   /*
    $array = 'array';
    $retorno = is_array ($array);  // is_array (); retorna true se for um array, e false se não for


    if ($retorno) {
      echo 'Sim, é um array';
    } else {
      echo 'Não, não é um array';
    }
    */

    /*

    $array = [ 2 => 'a', 1 => 'b', 5 => 'c'];


    echo '<pre>';

    print_r($array);

    echo '</pre>';

    $chaves_arrays = array_keys($array); // array_keys(); cria um array sequencial com as chaves do array passado como paramentro para função

    echo '<pre>';

    print_r($chaves_arrays); 

    echo '</pre>';

    */


    /*
    $nomes_turma = array ('Camila', 'Bruno', 'Dayanne', 'Ana', 'Eduarda');


    echo '<pre>';

    print_r($nomes_turma);

    echo '</pre>';


    sort($nomes_turma); // sort (); função para ordenar um array, se conseguir ordernar retorna true, caso não retorna false, obs: reoganiza os indices


    echo '<pre>';

    print_r($nomes_turma);

    echo '</pre>';

    */

    /*


    $nomes_turma = array ('Camila', 'Bruno', 'Dayanne', 'Ana', 'Eduarda');


    echo '<pre>';

    print_r($nomes_turma);

    echo '</pre>';


    asort($nomes_turma); // asort (); função para ordenar um array, se conseguir ordernar retorna true, caso não retorna false, obs: preserva os indices


    echo '<pre>';

    print_r($nomes_turma);

    echo '</pre>';
    
    */


    /*


    $nomes_turma = array ('Camila', 'Bruno', 'Dayanne', 'Ana', 'Eduarda');


    echo '<pre>';

    print_r($nomes_turma);

    echo 'Existem ' . count($nomes_turma) . ' elementtos dentro do array'; // count(); função retorna a quantidade de elementos que existem dentro do array 

    echo '</pre>';

    */



    /*

    $nomes_turma01 = array ('Camila', 'Bruno', 'Dayanne', 'Ana', 'Eduarda');
    $nomes_turma02 = array ('Victor', 'Rayem', 'Silva');
    $nomes_turma03 = array ('Grazi');


    $turma_principal = array_merge($nomes_turma01, $nomes_turma02, $nomes_turma03); // array_merge (); função para juntar arrays


    echo '<pre>';

    print_r($turma_principal);

    echo '</pre>';

    */


    /*

    $string = '25/01/2019';
    $array_retorno = explode('/', $string); // explode('delimitador/array); função para transformar uma string em um array, com base na separação pelo delimitador 

    echo '<pre>';

    echo $string;

    echo '<br/>';

    print_r($array_retorno);

    
    echo '<br/>';


    echo $array_retorno [2] . '-' .  $array_retorno [1] . '-' . $array_retorno [0];

    echo '</pre>';

    */


    $array_abc = ['a', 'b', 'c'];

    $string_retorno = implode(',', $array_abc); 

    //junta elementos de um array em uma string


    echo $string_retorno;




    

    







  
  ?>
    
</body>
</html>