<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Foreach pratica</h1>
  <?php 


  /*  Exemplo 01

    $funcionarios = array ('Victor', 'Neymar', 'Messi', 'Ronaldo');

    echo '<pre>';
        print_r($funcionarios);
    echo '</pre>';

    foreach ($funcionarios as $indice => $nomes_funcionarios) {  // para conseguimos recuperar o indice com o foreach, usamos a seguinte sintaxe
                                                      //   ($array as $indice => $variavel que vai receber o conteudo){};    
        echo "ID $indice, nome: $nomes_funcionarios <br/>";
    }


    */  


    

    // Exemplo 02, com arrays associativos


    $funcionarios = array (
    array ('Nome' => 'Victor', 'Salario' => 2500), 
    array ('Nome' => 'Ney', 'Salario' => 3000), 
    array ('Nome' => 'Messi', 'Salario' => 4500)
    );


    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';


 
    foreach ($funcionarios as $indice => $funcionario) {  
           
       // print_r($funcionario); // recuperando todos os arrays que estão dentro do array $funcionarios

        //echo '<br/>';


        foreach ($funcionario as $indice2 => $valor) {  // recupero $funcionario (recebeu o conteudo do array principal) as indice2 => $variavel que vai receber os valores multimencional/associativo
            
            
            echo "$indice2 - $valor <br/>";

          
        }


        echo "<hr/>";

       

}



echo '<hr/>';



$filmes = [];


$filmes ['filme01'] = array ('titulo' => 'Neymar jr-carreira', 'conteudo' => 'futebol');
$filmes ['filme02'] = array ('titulo' => 'Homen aranha', 'conteudo' => 'acao');


echo '<pre>';

print_r($filmes);

echo '</pre>';

echo '<hr/>';

echo 'O array tem ' . count($filmes) . ' posições';

echo '<hr/>';


foreach ($filmes as $indice01 => $filme) {

   // print_r($filme);

    //echo "<br/>";

    foreach ($filme as $indice3 => $desc_filmes) {
            echo "$indice3 - $desc_filmes <br/>";
    }
    echo '<hr/>';
}





  
  ?>
    
</body>
</html>