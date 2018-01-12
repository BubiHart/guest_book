<?php
  require_once '../PHP/database_connect.php';
?>
<html>
  <head>

    <meta charset="utf-8" http-equiv="Cache-Control" content="no-cache">
    <script src="libs/jquery_datatable/jquery_datatable_js.js"></script>
    <link rel="stylesheet" href="libs/normalize_css/normalize.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="libs/jquery_datatable/jquery_datatable_css.css">

  </head>
  <body>
    <div id="load_table">
<!-----------------------------------------FANCYBOX FORM------------------------------------------------------------------>
      <div id="form" class="form">
            <div class="form_basis">
              <table>
                <!--ROW NAME -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell">
                    <span>Name:</span>
                  </td>
                  <td class="form_basis-table_row-input-cell">
                    <!--NICKNAME INPUT -->
                    <input id='name' type='text' maxlength="24" required/>
                  </td>
                </tr>
                <!--ROW EMAIL -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell">
                    <span>Email:</span>
                  </td>
                  <td class="form_basis-table_row-input-cell">
                    <!--EMAIL INPUT -->
                    <input id='email' type='email' required/>
                  </td>
                </tr>
                <!--ROW TEXT -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell top">
                    <span>Text:</span>
                  </td>
                  <td class="form_basis-table_row-input-cell" >
                    <!--MESSAGE TEXTAREA -->
                    <textarea rows='5' id='text' type='text' maxlength="255" required></textarea>
                  </td>
                </tr>
                <!--ROW CAPTCHA -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell top">
                    <span>Captcha:</span>
                  </td>
                  <td class="form_basis-table_row-input-cell" align="center">
                    <!--CAPTCHA IMG -->
                    <img src="PHP/captcha.php" class="captcha_img" id="captcha_img">
                  </td>
                </tr>

                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-name-cell">

                  </td>
                  <td class="form_basis-table_row-input-cell">
                    <!--CAPTCHA INPUT -->
                    <input type="text" id="captcha" name="captcha" maxlength="10" required/>
                  </td>
                </tr>
                <!--ROW SUBMIT -->
                <tr class="form_basis-table_row">
                  <td class="form_basis-table_row-input-cell" colspan="2">
                    <!--SUBMIT INPUT -->
                    <input id='submit' type='submit' value='send message'/>
                  </td>
                  <td></td>
                </tr>
              </table>
            </div>
          </div>
<!-------------------------ADD COMMENT LINK -------------------------------->
    <a href="#form" rel="nofollow" class="modalbox">
    <span>
      add comment
    </span>
    </a>
<!-------------------------JQUERY DATATABLE WITH MESSAGES --------------------------------------------------------->
    <table id="main_table" class="data_table hover"  data-order='[[ 2, "desc" ]]' data-page-length='25' cellspacing="0">
      <thead>
        <tr>
<!-------------------------TABLE HEADER --------------------------------------------------------->
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
<!-------------------------MESSAGE ROW --------------------------------------------------------->
        <tr>
          <td class="data_table-name">
            <?php{htmlspecialchars($messages['name'])}?>
          </td>
          <td class="data_table-email">
            <?php{htmlspecialchars($messages['email'])}?>
          </td>
          <td class="data_table-date">
            <?php{htmlspecialchars($messages['date'])}?>
          </td>

          <td class="data_table-text">
            <?php{htmlspecialchars($messages['text'])}?>
          </td>
        </tr>

      </tbody>
      </table>
      </div>
  </body>
</html>
