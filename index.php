<?php
  require_once 'database_connect.php';
?>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Guest Book</title>
      <script type="text/javascript" src="jquery.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
      <script src="main.js"></script>
      <link rel="stylesheet" type="text/css" href="jquery_datatable\jquery_datatable.css">
      <link rel="stylesheet" href="normalize.css">
      <link rel="stylesheet" href="style.css">
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
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
                  Forum
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
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

          <table id="main_table" class="data_table hover"  data-order='[[ 2, "desc" ]]' data-page-length='25' cellspacing="0" border="1px">
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
                <!--<th class="data_table-text">
                  text
                </th>
              -->
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
                  <!--
                  <td class="data_table-text">
                    <?php{$messages['text']}?>
                  </td>
                -->
                </a>
                </tr>

            </tbody>
            </table>
        </main>


      <div id="form">
        <div class="info">
          <?php
          require_once 'add_message.php';
          ?>
        </div>
        <p>
          <span class='title'>Name:</span>
          <span class='field'>
            <input id='name' type='text' required/>
          </span>
        </p>
        <p>
          <span class='title'>E-mail:</span>
          <span class='field'>
            <input id='email' type='email' required/>
          </span>
        </p>
        <p>
          <span class='title'>Text:</span>
          <span class='field'>
            <textarea rows='5' id='text' type='text' required></textarea>
          </span>
        </p>
            <p>
              <span class='field'>
                <img src="captcha.php">
                <input type="text" id="captcha" name="captcha" required/>
              </span>
            </p>
        <p>
          <span class='title'>&nbsp;</span>
          <span class='field'>
            <input id='submit' type='submit' value="send message"/>
          </span>
        </p>
      </div>


    </body>

  </html>
  <?
?>
