<?php
require_once "../util.php";
require_once "../banco.php";
$usuario = fromPost("usuario");
$senha = fromPost("senha");
//verificação
$messages = "";
if (empty($usuario)) {
  $messages .= ("<li>Usuário obrigatório</li>");
}
if (empty($senha)) {
  $messages .= ("<li>Senha obrigatória</li>");
}
if (strlen($messages) > 0){
  $messages = "<ul>".$messages."</ul>";
  toSession("messages", $messages);
  toSession("usuario", $usuario);
  header("Location: ../../login.php");  
  exit();
}
try{
    $sql = "select nome, email, usuario from usuarios where usuario = '$usuario' and senha='$senha'";
    $stmt = getConnection()->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();
    if($row){
        toSession("autenticado", $row);
        header("Location: ../../timeline.php");
    } else {
        toSession("messages", "Usuário/Senha incorretos.");
        header("Location: ../../login.php");
    }
    //( as $row)

    //toSession("messages", "Ocorreu um erro ao realizar seu cadastro");
    //header("Location: ../../register.php");

}catch(PDOException $e) {
  toSession("messages", "Ocorreu um erro ao realizar seu cadastro: ".$e->getMessage());
   header("Location: ../../login.php");
}
?>
