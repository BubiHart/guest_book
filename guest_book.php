<?php
  require_once 'database_connect.php';
  require_once 'display_message.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="jquery_datatable\jquery_datatable.css">
    <script src="main.js"></script>
  </head>
  <body>
    <div id="load_table">

    <table id="main_table" class="data_table hover"  data-order='[[ 2, "desc" ]]' data-page-length='25' cellspacing="0">
      <thead>
        <tr>
          <th class="data_table-name">
            name
          </th>
          <th class="data_table-email">
            email
          </th>
          <th class="data_table-date">
            date
          </th>
          <th class="data_table-text">
            text
          </th>

        </tr>
      </thead>
      <tbody>

          <tr>
            <a href="#">
            <td class="data_table-name">
              <?php{$messages['name']}?>
            </td>
            <td class="data_table-email">
              <?php{$messages['email']}?>
            </td>
            <td class="data_table-date">
              <?php{$messages['date']}?>
            </td>

            <td class="data_table-text">
              <?php{$messages['text']}?>
            </td>

          </a>
          </tr>

      </tbody>
      </table>
      </div>
  </body>
</html>
