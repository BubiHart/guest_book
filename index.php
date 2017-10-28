<?php
  require_once 'db_connect.php';
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
        <script>
        $(document).ready(function()
        {
      $(".modalbox").fancybox();
      $('#main_table').dataTable
      (
       {
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "jq_dt_connect.php"
       }
      );
      $("#show_form").on("click", function()
      {
        $("#form").css("display", "block");

      }
     );
      }
     );
       </script>
    </head>

    <body>
      <div id="form">
        <span>name</span>
          <input id='name' type='text' />
        <span>e-mail:</span>
          <input id='email' type='email' />
        <span>text:</span>
          <textarea rows='5' id='text' type='text'></textarea>
        <span>&nbsp;</span>
          <input id='submit-id' type='submit' value='Отправить' />
      </div>
      <a href="#form" rel="nofollow" class="modalbox">add comment</a>
      <table id="main_table" class="display" width="100%" cellspacing="0">
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
