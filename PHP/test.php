<?php
/*
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'dbtuts');
*/

class DB_con
{
 function __construct()
 {
   /*
   try
   {
     $pdo = new PDO
     (
       'mysql:host=localhost;dbname=guest_book','user','BodSmxbmRo8rl3bi',
 		   [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
 	    );
    }
    catch (PDOException $e)
    {
      echo "Error conecting to the database";
    }
    */
  }

 public function insert($name, $text, $email)
 {
   $pdo = new PDO
   (
     'mysql:host=localhost;dbname=guest_book','user','BodSmxbmRo8rl3bi',
     [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

   $query = "INSERT INTO messages VALUES ( NULL, :name, :text, :email, NOW(), 1)";
   $res = $pdo->prepare($query);
   $res->bindParam(':name', $name, PDO::PARAM_STR, 255);
   $res->bindParam(':text', $text, PDO::PARAM_STR, 255);
   $res->bindParam(':email', $email, PDO::PARAM_STR, 255);
   $res->execute();
   return $res;
 }

}

?>
