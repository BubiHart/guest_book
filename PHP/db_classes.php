<?php

class DB_con
{
  private $DB_SERVER = 'localhost';
  private $DB_USER = 'user';
  private $DB_PASS = 'BodSmxbmRo8rl3bi';
  private $DB_NAME = 'guest_book';

   private function construct()
   {

    try
     {
       $pdo = new PDO
       (
         "mysql:host=$this->DB_SERVER;dbname=$this->DB_NAME",$this->DB_USER,$this->DB_PASS,
   		   [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
   	    );
      }
      catch (PDOException $e)
      {
        echo "Error conecting to the database";
      }
      return $pdo;
    }


 public function insert($name, $text, $email)
 {
   $connect = $this->construct();

   $query = "INSERT INTO messages VALUES ( NULL, :name, :text, :email, NOW(), 1)";
   $res = $connect->prepare($query);
   $res->bindParam(':name', $name, PDO::PARAM_STR, 255);
   $res->bindParam(':text', $text, PDO::PARAM_STR, 255);
   $res->bindParam(':email', $email, PDO::PARAM_STR, 255);
   $res->execute();
   return $res;
 }
}
?>
