<?php
  // MAKING CONNECTION WITH DATABASE
  require_once("database_connect.php");
  try
  {
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
      else {
        $error[] = "email isn't valid";
      }

      //IF THERE IS NO ERRORS MAKING NEW ENTRY INTO DATABASE

      if(empty($error))
      {
        $query = "INSERT INTO
                    messages
                  VALUES (
                    NULL,
                    :name,
                    :email,
                    :text,
                    NOW(),
                    1)";
        $usr = $pdo->prepare($query);
        $usr->execute([
          'name' => $_POST['name'],
          'email' => $_POST['email'],
          'text' => $_POST['text'],
        ]);
      }
    }

  }
  catch (PDOException $e)
  {
    echo "error with query: " . $e->getMessage();
  }
