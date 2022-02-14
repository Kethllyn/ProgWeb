
<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <table border="1">
      <thead>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Apelido</th>
        <th>Telefone</th>
      </thead>
      <tbody>
        <?php
        include "deletar.php";
        require_once "banco.php";
        $sql = "select nome, email, apelido,telefone from usuarios";
        foreach (getConnection()->query($sql) as $row) {
          echo "<tr>";
          echo "<td>".$row['nome']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['apelido']."</td>";
          echo "<td>".$row['telefone']."</td";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <h3>Deletar dados:</h3>
    <form name="email" method="post" action="deletar.php">
    	E-mail do contato: <input type="text" name="email"/>
    	<input button class='button-excluir' type="submit" value="Deletar"/>

    </form>
    <a href="contato.html"  class="button button-novo" >Registrar novo contato</a>
  </body>
</html>
