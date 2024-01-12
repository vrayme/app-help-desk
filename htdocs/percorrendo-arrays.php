<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Percorrendo arrays com estruturas de repetição</h1>
  <?php 

 
    $registros = array (
     array ('titulo' => 'Titulo 1', 'conteudo' => 'Conteudo 1'),
     array ('titulo' => 'Titulo 2', 'conteudo' => 'Conteudo 2'), 
     array ('titulo' => 'Titulo 3', 'conteudo' => 'Conteudo 3'),
     array ('titulo' => 'Titulo 4', 'conteudo' => 'Conteudo 4'));

    

    /*  // percorrendo array $registro

    $i = 0;

    while ($i < 3) {

        echo "Na posição $i, temos $registro[$i]";
        echo "<br/>";

        $i++;
    }

    */

    echo '<pre>';


    print_r($registros);

    echo  '</pre>';

    //

    echo '<hr/>';

    echo 'O array tem ' . count($registros) . ' posições';

    echo '<hr/>';


    $i = 0;

    /*

    while ($i < count($registros)) {

       echo '<h3>' . $registros [$i] ['titulo'] . '</h3>';  // para pecorrer arrays multidimencionais, passamos primeiro $nomeArray [$posição/indice] ['nome associativo'];
       echo  '<p>' . $registros [$i] ['conteudo'] . '</p>';


        echo "<hr/>";

        $i++;
    }

    */

    // USANDO O DO.. WHILE

    /*

    do {

        echo '<h3>' . $registros [$i] ['titulo'] . '</h3>';  // para pecorrer arrays multidimencionais, passamos primeiro $nomeArray [$posição/indice] ['nome associativo'];
        echo  '<p>' . $registros [$i] ['conteudo'] . '</p>';
 
 
         echo "<hr/>";
 
         $i++;

    } while ($i < count($registros));


    */

    // USANDO O FOR

    for ($i; $i < count($registros); $i++) {

        echo '<h3>' . $registros [$i] ['titulo'] . '</h3>';  // para pecorrer arrays multidimencionais, passamos primeiro $nomeArray [$posição/indice] ['nome associativo'];
        echo  '<p>' . $registros [$i] ['conteudo'] . '</p>';
 
 
         echo "<hr/>";

    }


    






    $filmes = [];


    $filmes ['filme01'] = array ('titulo' => 'Neymar jr-carreira', 'conteudo' => 'futebol');
    $filmes ['filme02'] = array ('titulo' => 'Homen aranha', 'conteudo' => 'acao');


    echo '<pre>';

    print_r($filmes);

    echo '</pre>';

    echo '<hr/>';

    echo 'O array tem ' . count($filmes) . ' posições';

    echo '<hr/>';

    

    /*


    foreach ($filmes as $filme) {
          echo "$filme";
    }

    */



    

    

 

  ?>
    
</body>
</html>