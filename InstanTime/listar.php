<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de Usuários</title>

  </head>
  <body>

<table border="1">
  <thead>
    <th>Nome</th><th>E-mail</th><th>Usuário</th>
  </thead>
  <tbody>
    <?php
    require_once "banco.php";
    $sql = "select nome, email, usuario from usuarios";

    foreach (getConnection()->query($sql) as $row) {
      echo "<tr>";
      echo "<td>".$row['nome']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['usuario']."</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>

  </body>
</html>
