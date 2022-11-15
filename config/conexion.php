<?php

$username = 'root';
$password = '';
$dsn = 'mysql:host=localhost; dbname=prueba';

try {

  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Error al conectarse a la base de datos ".$e->getMessage();

}

?>