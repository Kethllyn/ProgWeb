<?php require_once "bootstrap.php"; ?>
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instantime - Registro</title>
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
          <h3 class="message">Compartilhe seus momentos. Cadastre-se</h3>
        </header>
        <div class="form-panel">
          <form method="POST" action="app/logic/process_register.php">
            <div>
              <input type="email" value="<?=fromSession("email")?>" name="email" placeholder="Número de Celular ou e-mail" class="input-control">
            </div>
            <div>
              <input type="text" value="<?=fromSession("nome")?>" name="nome" placeholder="Nome completo" class="input-control">
            </div>
            <div>
              <input type="text" value="<?=fromSession("usuario")?>" name="usuario"  placeholder="Nome de Usuário" class="input-control">
            </div>
            <div>
              <input type="password"  name="senha" placeholder="Senha" class="input-control">
            </div>
            <div>
              <input type="checkbox" name="concordo">
              <label for="concordo">Concordo com os termos,
                Política de Dados e Política de Cookies.</label>
            </div>
            <div>
              <input type="submit" value="Cadastre-se" class="button button-register" >
            </div>
          </form>
        </div>
      </section>
      <section class="panel sec-panel">
           <h3 class="message">Já tem uma conta?</h3>
           <a href="login.php"  class="button button-login" >Conecte-se</a>
      </section>
    </main>
  </body>
</html>
