<?php
  require_once 'PHP/database_connect.php';
  require_once 'PHP/display_message.php';
?>
  <html>
    <head>

      <meta charset="utf-8">
      <title>Site title</title>
      <link rel="stylesheet" href="libs/normalize_css/normalize.css">
      <link rel="stylesheet" href="CSS/style.css">
      <link rel="stylesheet" href="libs/jquery_datatable/jquery_datatable_css.css">
      <link rel="stylesheet" href="libs/fancybox/fancybox_css.css">
      <script src="libs/jquery/jquery.js"></script>
      <script src="libs/fancybox/fancybox_js.js"></script>
      <script src="libs/jquery_validation/jquery_validate_js.js"></script>
      <script src="libs/jquery_validation/jquery_validate_additional-methods_js.js"></script>
      <script src="libs/jquery_datatable/jquery_datable_js.js"></script>
      <script src="JS/main.js"></script>
    </head>

    <body>
        <div class="wrapper-top wrapper">
        <!---------------------------------HEADER-------------------------------------------->
          <header>
              <h1 class="header-title">
                SITE TITLE
              </h1>

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

 <div id="content" class="content">
   HOME
 </div>

        </main>
<!--------------------------------FORM----------------------------------->



    </body>

  </html>
  <?
?>
