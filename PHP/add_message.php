<?php
  // MAKING CONNECTION WITH DATABASE
  require_once("database_connect.php");
  try
  {
    //CHECKING IF POST DATA IS GIVEN
    session_start();
    if($_POST['captcha'] != $_SESSION['rand_code'])
    {
      echo 0;
      return false;
    }
    if($_POST['captcha'] == $_SESSION['rand_code'])
    {
      echo 1;
    }
    if(!empty($_POST))
    {

      $error = [];
      if(empty($_POST['name'])) {
        $error[] = "missing name";
      }
      if(empty($_POST['email'])) {
        $error[] = "missing email";
      }
      if(empty($_POST['text'])) {
        $error[] = "missing text";
      }
      if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      }
      else
      {
        $error[] = "email isn't valid";
        echo 2;
      }


      //IF THERE IS NO ERRORS MAKING NEW ENTRY INTO DATABASE

      if(empty($error))
      {
        $query = "INSERT INTO messages VALUES ( NULL, :name, :text, :email, NOW(), 1)";
        $usr = $pdo->prepare($query);
        $usr->execute
        (
          [
          'name' => $_POST['name'],
          'email' => $_POST['email'],
          'text' => $_POST['text'],
        ]
        );
      }
    }

  }
  catch (PDOException $e)
  {
    echo "error with query: " . $e->getMessage();
  }
