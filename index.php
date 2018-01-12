<?php
  require_once 'PHP/database_connect.php';
?>
<html>

<head>

  <meta charset="utf-8" http-equiv="Cache-Control" content="no-cache">
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
<!-----------------------------------------HEADER------------------------------------------------------------------>
  <header>
    <header class="header-wrapper">
      <div class="header-wrapper-logo">
        <span>
            LOGO
          </span>
      </div>
<!-------------------------SITE NAVIGATION --------------------------------------------------------->
      <nav>
        <ul class="header-wrapper_main-navigation">

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
      </nav>
    </header>
  </header>
<!-----------------------------------------MAIN------------------------------------------------------------------>
  <main>
    <main class="main-wrapper">
      <div id="content" class="main-wrapper-content">
        HOME
      </div>
    </main>
  </main>
<!-----------------------------------------FOOTER------------------------------------------------------------------>
  <footer>
    <footer class="footer-wrapper">
      <span>
          footer
        </span>
    </footer>
  </footer>

</body>
</html>
