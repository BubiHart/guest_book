<?php
  // MAKING CONNECTION WITH DATABASE

  require_once 'test.php';
  $con = new DB_con;
  try
  {
    //CHECKING CAPTCHA
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
    //CHECKING IF POST DATA IS GIVEN
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
        $name = $_POST['name'];
        $text = $_POST['text'];
        $email = $_POST['email'];

        $con->insert($name,$text,$email);
      }
    }

  }
  catch (PDOException $e)
  {
    echo "error with query: " . $e->getMessage();
  }
