<?php require_once "bootstrap.php"; ?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instantime - Login</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Roboto:400,700" rel="stylesheet">
  </head>
  <body class="back-photo">
    <main>
      <section class="panel main-panel">
        <header>
          <h1 class="title">
            <i class="fas fa-camera-retro"></i>
            Instan<span class="clone">Time</span>
          </h1>
          <h2 class="error"><?=fromSession("messages")?></h2>
          <h3 class="message">Informe seus dados para continuar</h3>
        </header>
        <div class="form-panel">
          <form method="POST" action="app/logic/process_login.php">
            <div>
              <input type="text" name="usuario" value="<?=fromSession("usuario")?>" placeholder="Nome de usuário" class="input-control">
            </div>

            <div>
              <input type="password" name="senha"  placeholder="Senha" class="input-control">
            </div>

            <div>
              <input type="submit" value="Entrar" class="button button-register" >
            </div>
          </form>
        </div>
      </section>
      <section class="panel sec-panel">
           <h3 class="message">Ainda não tem uma conta?</h3>
           <a href="registro.php"  class="button button-login" >Registre-se</a>
      </section>
    </main>
  </body>
</html>
