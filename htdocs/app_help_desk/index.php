
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida-login.php" method="post"> <!--action="valida-login.php" = destino (action ="script de destino.php") que será enviado as informações passadas no formulario--> <!--method="post" = vai recuperar os paramentros passados (names= "email" e names= "senha"), escondendo os mesmo da url-->
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha"> <!-- atributo (name="nome desejado")  = vai receber o valor contido no campo/input/caixa de texto-->
                </div>
                
              <? if (isset ($_GET['login']) && $_GET['login'] == 'erro') {  // isset ();, verifica se um determinado indice esta sentado, no caso se ele existe ?>
                
                <div class="text-danger">Usuário ou senha inválido (s)</div>

                <? } ?>

                <? if (isset ($_GET['login']) && $_GET['login'] == 'erro2') {  // isset ();, verifica se um determinado indice esta sentado, no caso se ele existe // tratamento de erro 2, caso o usuario tente acessar de forma direta as paginas da aplicacao ?>
                
                <div class="text-danger">Faça login antes de acessar as páginas protegidas</div>

                <? } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>