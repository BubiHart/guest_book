<?php
  try
  {
    $pdo = new PDO
	(
		'mysql:host=localhost;
		dbname=guest_book',
		'user',
		'BodSmxbmRo8rl3bi',
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	);
  }
  catch (PDOException $e)
  {
    echo "Error conecting to the database";
  }
?>
