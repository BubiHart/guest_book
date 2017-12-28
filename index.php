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
                SITE TITLE
              </h1>
              <a href="#form" rel="nofollow" class="modalbox">add comment</a>
          </header>
<!---------------------------------MENU-------------------------------------------->
          <menu>
            <ul class="menu_main-navigation">
              <li>
                <a href="#" id="home_link">
                  Home
                </a>
              </li>
              <li>
                <a href="#" id="blog_link">
                  Blog
                </a>
              </li>
              <li>
                <a href="#" class="guest_book" id="guest_book_link">
                  Guest Book
                </a>
              </li>
              <li>
                <a href="#" id="contact_link">
                  Contact us
                </a>
              </li>
            </ul>
          </menu>
          </div>
        <main>
<!------------------------------------------ DATA TABLE------------------------------------------------------------------>

  <div id="table">

  </div>

  <div id="blog">

  </div>

  <div id="contact">

  </div>

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
