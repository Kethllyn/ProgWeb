<?php
function getConnection() {
  $username = 'root';
  $password = '';
  $conn = new PDO('mysql:host=localhost;dbname=contatos', $username, $password);
  return $conn;
}
 ?>
