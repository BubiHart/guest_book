<?php
  try
  {
    $pdo = new PDO
	(
		'mysql:host=localhost;
		dbname=test',
		'user', 
		'LK9HZNw3mX8dQPmZ',
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	);
  }
  catch (PDOException $e)
  {
    echo "Error conecting to the database";
  }
?>
