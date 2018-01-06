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
