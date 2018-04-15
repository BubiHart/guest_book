$(document).ready(function()
{
        $("#form").validate();
        $('#guest_book_link').click(function()
        {

          $("#content").load("pages/guest_book.php #load_table", function()
          {
            $(".modalbox").fancybox();
            $('#main_table').dataTable
            ({
              "bProcessing": true,
              "bServerSide": true,
              "bRetrieve": true,
              "sAjaxSource": "PHP/jquery_datatables_server_connect.php"
            });
            $("#submit").on("click", function()
            {
              //CHECKING CORRECT INFORMATION FROM INPUT'S IN FORM
              if ($.trim($("#name").val()) === "")
              {
                alert('please enter field "name"');
                return false;
              }
              if ($.trim($("#email").val()) === "")
              {
                alert('please enter field "e-mail"');
                return false;
              }
              if ($.trim($("#captcha").val()) === "")
              {
                alert('please enter field "captcha"');
                return false;
              }
              if ($.trim($("#text").val()) === "")
              {
                alert('please enter field "text"');
                return false;
              }

              //BLOCK "SUBMIT" BUTTON
              $("#submit").prop("disabled", true);

              // AJAX QUERY
              $.ajax
              ({
                url: "PHP/add_message.php",
                method: 'post',
                data: {
                  name: $("#name").val(),
                  email: $("#email").val(),
                  captcha: $("#captcha").val(),
                  text: $("#text").val()
                }
              }).done(function(data)
              {

                $('#main_table').DataTable().ajax.reload();

                //UNBLOCK "SUBMIT" BUTTON

                $("#submit").prop("disabled", false);

                //PROCESSING RESPONSE FROM PHP FILE
                if (data == 0)
                {
                  alert('captcha incorrect');
                }

                if(data == 12)
                {
                  alert('Email incorrect');
                }
                if (data == 1)
                {
                  $.fancybox.close();
                  document.getElementById("name").value = "";
                  document.getElementById("email").value = "";
                  document.getElementById("text").value = "";
                  document.getElementById("captcha").value = "";
                }
              });
            });
          });
        });

        $('#home_link').click(function()
        {
          $.ajax
          ({
            url: "pages/home.php",
            method: 'post',
            cache: false,
            success: function(html)
            {
              $("#content").html(html);
            }
          });
          return false;
        });

        $('#blog_link').click(function()
        {
          $.ajax
          ({
            url: "pages/blog.php",
            method: 'post',
            cache: false,
            success: function(html)
            {
              $("#content").html(html);
            }
          });
          return false;
        });

        $('#contact_link').click(function()
        {
          $.ajax
          ({
            url: "pages/contact.php",
            method: 'post',
            cache: false,
            success: function(html)
            {
              $("#content").html(html);
            }
          });
          return false;
        });


      });
