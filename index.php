<?php
  require_once 'database_connect.php';
  require_once 'display_message.php';
?>
  <html>
    <head>

      <meta charset="utf-8">
      <title>Guest Book</title>
      <script type="text/javascript" src="jquery.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
      <script src="main.js"></script>
      <link rel="stylesheet" href="normalize.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" type="text/css" href="jquery_datatable\jquery_datatable.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">

    </head>

    <body>
        <div class="wrapper-top wrapper">
        <!---------------------------------HEADER-------------------------------------------->
          <header>
              <h1 class="header-title">
                Guest book
              </h1>
              <a href="#form" rel="nofollow" class="modalbox">add comment</a>
          </header>
<!---------------------------------MENU-------------------------------------------->
          <menu>
            <ul class="menu_main-navigation">
              <li>
                <a href="#">
                  Home
                </a>
              </li>
              <li>
                <a href="index.php">
                  Blog
                </a>
              </li>
              <li>
                <a href="#" class="guest_book">
                  Guest Book
                </a>
              </li>
              <li>
                <a href="#">
                  Contact us
                </a>
              </li>
            </ul>
          </menu>
          </div>
        <main>
<!------------------------------------------ DATA TABLE------------------------------------------------------------------>
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
        </main>
<!--------------------------------FORM----------------------------------->

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
              <img src="captcha.php" class="captcha_img">
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

    </body>

  </html>
  <?
?>
