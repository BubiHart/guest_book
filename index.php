<?php
  require_once 'db_connect.php';
  require_once 'display_message.php';
  ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Guest Book</title>
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="style.css">
      <script type="text/javascript" src="jquery.js" ></script>
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    </head>

    <body>
      <table id="example" class="display" width="100%" cellspacing="0">
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
    <script>
 $(function(){
   $("#example").dataTable();
 })
 </script>
  </html>
  <?
?>
