<?php 

session_start();

/*

echo '<pre>';

print_r($_SESSION);

echo '</pre>';


//remover indices do array de sessão, um por um
//unsert (array, indice que vai ser removido);

unset($_SESSION['x']); // o indice so vai ser removido se ele existir

echo '<pre>';

print_r($_SESSION);

echo '</pre>';

//destruir a variavel de sessão
//session_destroy();

session_destroy();

//forçar um redirecionamento

echo '<pre>';

print_r($_SESSION);

echo '</pre>';
*/

session_destroy();
header('Location: index.php');


?>