<?php
  require_once 'database_connect.php';
  ?>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Guest Book</title>
      <script type="text/javascript" src="jquery.js" ></script>
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      <link rel="stylesheet" type="text/css" href="style.css">
      <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
        <script>
        $(document).ready(function()
        {

          $(".modalbox").fancybox();
          $('#main_table').dataTable
          (
           {
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "jquery_datatables_server_connect.php"
           }
          );
          $("#show_form").on("click", function()
          {
            $("#form").css("display", "block");

      }
     );
      }
     );
       </script>
           <script type="text/javascript">
             $(document).ready(function()
             {
               $("#submit").on("click", function()
               {
                 //CHECKING CORRECT INFORMATION FROM INPUT'S IN FORM
                   if($.trim($("#name").val()) === "")
                   {
                     alert('please enter field "name"');
                     return false;
                   }
                   if($.trim($("#email").val()) === "")
                   {
                     alert('please enter field "e-mail"');
                     return false;
                   }
                   if($.trim($("#text").val()) === "")
                   {
                     alert('please enter field "text"');
                     return false;
                   }

                   //BLOCK "SUBMIT" BUTTON
                   $("#submit").prop("disabled", true);

                   // AJAX QUERY
                   $.ajax({
                     url: "add_message.php",
                     method: 'post',
                     data:
                     {
                            name: $("#name").val(),
                            email: $("#email").val(),
                            text: $("#text").val()
                     }
                   }).done(function(data)
                   {
                     $('#main_table').DataTable().ajax.reload();
                   //UNBLOCK "SUBMIT" BUTTON
                      $("#submit").prop("disabled", false);

                      $.fancybox.close();
                      document.getElementById("name").value = "";
                      document.getElementById("email").value = "";
                      document.getElementById("text").value = "";

                   }
                 );
               }
               )
             }
             );
           </script>
    </head>

    <body>
      <a href="#form" rel="nofollow" class="modalbox">add comment</a>
      <div id="form">
        <p>
          <span class='title'>Name:</span>
          <span class='field'>
            <input id='name' type='text' />
          </span>
        </p>
        <p>
          <span class='title'>E-mail:</span>
          <span class='field'>
            <input id='email' type='email' />
          </span>
        </p>
        <p>
          <span class='title'>Text:</span>
          <span class='field'>
            <textarea rows='5' id='text' type='text'></textarea>
          </span>
        </p>
        <p>
          <span class='title'>&nbsp;</span>
          <span class='field'>
            <input id='submit' type='submit' value="send message"/>
          </span>
        </p>
      </div>

      <table id="main_table" class="display" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>name</th>
            <th>text</th>
            <th>date</th>
            <th>email</th>
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

  </html>
  <?
?>
