<?php 

require_once ('validador-acesso.php');

//print_r ($_SESSION);

?>

<?php 

$chamados = array (); // array que vai entrar os registros

$arquivo = fopen('../../app_help_desk/arquivo.hd', 'r'); // abrir o arquivo para leitura

//vamos percorrer esse arquivo, enquanto houver registros (linha), a serem recuperadas
while (!feof($arquivo)) { // testa pelo fim do arquivo, caso não ache o fim retorna false

  $registros = fgets($arquivo); // essa função vai recuperar cada linha do arquivo

  $chamados[] = $registros; // colocando os registros dentro de um array

}

// fechar o arquivo

fclose($arquivo);

/*

echo '<pre>';

print_r($chamados);

echo '</pre>';
*/


?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a> <!--Botão/link para sair, canto direito superior da aplicação-->
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

            <? foreach ($chamados as $chamado ) { ?> 
              <?php 
                
                $chamados_dados = explode('#', $chamado); // a partir de um marcador vai criar um array


               //print_r($chamados_dados);

                if ($_SESSION['perfil_id'] == 2) {
                  //so vamos exibir o chamado, se ele for criado pelo o proprio usuario
                  if ($_SESSION['id'] != $chamados_dados [0]) {
                    continue;
                  }
                }

            
                if (count($chamados_dados) < 3) {// count vai contar os indices do array 
                  continue; // pula
                }

                /*

                echo '<pre>';

                print_r($chamados_dados);
                
                echo '</pre>';
                */
                
                ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?=$chamados_dados [1]?></h5> <!--// recupera o array na posição desejada-->
                  <h6 class="card-subtitle mb-2 text-muted"><?=$chamados_dados [2]?></h6>
                  <p class="card-text"><?=$chamados_dados [3]?></p> <!--O card está dentro do foreach para se repertir-->
                </div>
              </div>

              <? } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a> <!--botão de redirecionamento para página home.php, após a autenticação--> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>