
<?php
require_once "banco.php";

if(isset($_POST['email'])){
  $email = $_POST['email'];
  try{
    $sql = "DELETE FROM usuarios where email = :email";
    $stmt = getConnection()->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
      echo"Excluído com sucesso!";
  }catch(PDOException $var){
    echo"Erro ao excluir".$var->getMessage();
  }
}
?>
