<?php
  require_once '../PHP/database_connect.php';
  require_once '../PHP/display_message.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <script src="libs/jquery_datatable/jquery_datatable_js.js"></script>
    <link rel="stylesheet" href="libs/normalize_css/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="libs/jquery_datatable/jquery_datatable_css.css">

  </head>
  <body>
    <div id="load_table">

      <div id="form" class="form">
            <div class="form_basis">
              <table>
                <!--ROW NAME -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell">
                    <span>Name:</span>
                  </td>
                  <td class="form_basis-table_row-input-cell">
                    <input id='name' type='text' required/>
                  </td>
                </tr>
                <!--ROW EMAIL -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell">
                    <span>Email:</span>
                  </td>
                  <td class="form_basis-table_row-input-cell">
                    <input id='email' type='email' required/>
                  </td>
                </tr>
                <!--ROW TEXT -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell top">
                    <span>Text:</span>
                  </td>
                  <td class="form_basis-table_row-input-cell" >
                    <textarea rows='5' id='text' type='text' required></textarea>
                  </td>
                </tr>
                <!--ROW CAPTCHA -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell top">
                    <span>Captcha:</span>
                  </td>
                  <td class="form_basis-table_row-input-cell" align="center">
                    <img src="PHP/captcha.php" class="captcha_img">
                  </td>
                </tr>

                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell">

                  </td>
                  <td class="form_basis-table_row-input-cell">
                    <input type="text" id="captcha" name="captcha" required/>
                  </td>
                </tr>
                <!--ROW SUBMIT -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-input-cell" colspan="2">
                    <input id='submit' type='submit' value="send message"/>

                  </td>
                  <td></td>
                </tr>
                <!-- -->
              </table>
            </div>
          </div>

    <a href="#form" rel="nofollow" class="modalbox">add comment</a>
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
