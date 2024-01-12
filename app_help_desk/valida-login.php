<?php 

// iniciando sessões

session_start();


/* testando variaveis de sessão
 
$_SESSION['x'] = 'Valor de sessão!';

print_r($_SESSION);

echo '<hr/>';

echo $_SESSION['y'] . '<br/>';
*/




$usuario_autenticado = false; //variavel de controle de autenticação
$usuarios_id = null;  // variavel que vai receber o id cadastrado no array usuarios
$perfil_usuarios_id = null; // variavel que vai receber o id adm ou de usuario

//array de controle de perdil

$perfil = array (1 => 'Administrativo', 2 => 'Usuarios');

//autenticando usuarios


$usuarios = array (  // relação de usuarios cadastrados
    array ('id' =>1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array ('id' =>2, 'email' => 'neymar@teste.com.br', 'senha' => '1234' , 'perfil_id' => 1),
    array ('id' =>3, 'email' => 'maria@teste.com.br', 'senha' => '1234' , 'perfil_id' => 2),
    array ('id' =>4, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
);

/*

echo '<pre>';

print_r($usuarios);

echo '</pre>';

*/

foreach ($usuarios as $user) {

   // print_r($user);

   /* // comparação com a relação de usuarios cadastrados, entre post e usuarios($user);

   echo 'Usuarios cadastrados no bd: ' . $user['email'] . ' / senha: ' . $user['senha'];
   echo '<br/>';
   echo 'Usuarios que vão entrar com o login: ' . $_POST['email'] . ' / senha: ' . $_POST['senha'];

   */

   if ($user['email'] ==  $_POST['email'] && $user['senha'] ==  $_POST['senha'] ) {
   
    $usuario_autenticado = true;
    $usuarios_id = $user['id'];
    $perfil_usuarios_id = $user['perfil_id'];

    //print_r($user);

    
   }

}

if ($usuario_autenticado) {
    
    //echo 'Usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuarios_id; // variavel de sessão global que vai receber o id
    $_SESSION['perfil_id'] = $perfil_usuarios_id;
    header('Location: home.php?'); // redirecionamento para página home.php, após a autenticação

} else {

    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro'); // função: header ('Location: pagina de direncionamento.php? paramentro de erro, atraves da super global get, vai aparecer na url da pagina);
    
}









//vamos recuperar os paramentros passados nos seus respectivos (names= "email" e names= "senha" ), no caso nas caixas de texto/inputs
// através das super globais $_GET; e $_POS;
// $_GET; = é um array cada paramentro (names= "email/indice" e names= "senha/indice" ), encaminhado na url se transforma em um indice desse array

/*
echo "Paramentros";

echo '<br/>';

print_r($_GET); 

echo "<pre>";

print_r($_GET);

echo "</pre>";

//indice email

echo "<hr/>";

echo "Paramentro/email";

echo '<br/>';


echo $_GET['email'];

//tag pre

echo "<pre>";

print_r($_GET['email']);

echo "</pre>";


//indice senha

echo "<hr/>";

echo "Paramentro/senha";

echo '<br/>';

echo $_GET['senha'];

//tag pre

echo "<pre>";

print_r($_GET['senha']);

echo "</pre>";


---------

//GET


print_r($_GET);

echo '<br/>';

echo $_GET['email'];

echo '<br/>';


echo $_GET['senha'];




//POST

echo '<pre>';

print_r($_POST);

echo '</pre>';

echo '<br/>';

echo $_POST['email'];

echo '<br/>';


echo $_POST['senha'];


*/





?>