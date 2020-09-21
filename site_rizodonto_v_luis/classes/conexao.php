<?php

$username = "root";
$password = "123";
try {
  $conn = new PDO('mysql:host=localhost;dbname=agendamento', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>