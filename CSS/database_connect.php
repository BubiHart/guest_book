<?php
$servername = "localhost";
$username = "id4248746_user";
$password = "BodSmxbmRo8rl3bi";

try {
   $pdo = new PDO("mysql:host=$servername;dbname=id4248746_guest_book", $username, $password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
?>
