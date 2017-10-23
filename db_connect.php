<?php ## Соединение с базой данных
  try
  {
    $pdo = new PDO(
    'mysql:host=localhost;dbname=test', 'root', '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  }
  catch (PDOException $e)
  {
    echo "Error conecting to the database";
  }
?>
