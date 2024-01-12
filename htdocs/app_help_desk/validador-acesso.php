<?php 

session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM' ) { // queremos saber se o indice nao existe
  header('Location: index.php?login=erro2');
}


?>