<?php
require_once "../util.php";
require_once "../banco.php";
$email = fromPost("email");
$nome = fromPost("nome");
$usuario = fromPost("usuario");
$senha = fromPost("senha");
$concordo = fromPost("concordo");
//verificação
$messages = "";
if (empty($email)) {
  $messages .= ("<li>E-mail obrigatório</li>");
}
if (empty($nome)) {
  $messages .= ("<li>Nome obrigatório</li>");
}
if (empty($usuario)) {
  $messages .= ("<li>Usuário obrigatório</li>");
}
if (empty($senha)) {
  $messages .= ("<li>Senha obrigatória</li>");
}
if (!isset($concordo)){
  $messages .= ("<li>Você precisa aceitar os termos para se cadastrar</li>");
}
if (strlen($messages) > 0){
  $messages = "<ul>".$messages."</ul>";
  toSession("messages", $messages);
  header("Location: ../../registro.php");
  exit();
}
try{
  $sql = "INSERT INTO usuarios(nome, email, usuario, senha) VALUES (:nome, :email, :usuario,:senha)";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':usuario', $usuario);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':senha', $senha);
  if ($stmt->execute()){
    toSession("messages", "Cadastro realizado com sucesso!");
    header("Location: ../../login.php");
  } else {
    toSession("messages", "Ocorreu um erro ao realizar seu cadastro");
    header("Location: ../../registro.php");
  }
}catch(PDOException $e) {
  toSession("messages", "Ocorreu um erro ao realizar seu cadastro: ".$e->getMessage());
   header("Location: ../../registro.php");
}
?>
