<?php
  require_once 'database_connect.php';
?>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Guest Book</title>
      <script type="text/javascript" src="jquery.js" ></script>
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="style.css">
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
      <script src="main.js"></script>

    </head>

    <body>
      <a href="#form" rel="nofollow" class="modalbox">add comment</a>
      <div id="form">
        <div class="info">
          <?php
          require_once 'add_message.php';
          ?>
        </div>
        <p>
          <span class='title'>Name:</span>
          <span class='field'>
            <input id='name' type='text' required/>
          </span>
        </p>
        <p>
          <span class='title'>E-mail:</span>
          <span class='field'>
            <input id='email' type='email' required/>
          </span>
        </p>
        <p>
          <span class='title'>Text:</span>
          <span class='field'>
            <textarea rows='5' id='text' type='text' required></textarea>
          </span>
        </p>
            <p>
              <span class='field'>
                <img src="captcha.php">
                <input type="text" id="captcha" name="captcha" required/>
              </span>
            </p>
        <p>
          <span class='title'>&nbsp;</span>
          <span class='field'>
            <input id='submit' type='submit' value="send message"/>
          </span>
        </p>
      </div>

      <table id="main_table" class="display" width="100%" data-order='[[ 2, "desc" ]]'data-page-length='25' cellspacing="0">
        <thead>
          <tr>
            <th>name</th>
            <th>email</th>
            <th>date</th>
            <th>text</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                  <td><?php{$messages['name']}?></td>
                  <td><?php{$messages['email']}?></td>
                  <td><?php{$messages['date']}?></td>
                  <td><?php{$messages['text']}?></td>
                  </tr>
        </tbody>
        </table>

    </body>

  </html>
  <?
?>
