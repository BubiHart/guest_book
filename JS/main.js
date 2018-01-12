$(document).ready(function()
{
        //JQUERY VALIDATION
        $("#form").validate();
        //GUEST BOOK LOAD ON CLICK
        $('#guest_book_link').click(function()
        {

          $("#content").load("pages/guest_book.php #load_table", function()
          {
            //FANCYBOX INITIALIZATION
            $(".modalbox").fancybox();
            //JQUERY DATATABLE INITIALIZATION
            $('#main_table').dataTable
            ({
              "bProcessing": true,
              "bServerSide": true,
              "bRetrieve": true,
              "sAjaxSource": "PHP/jquery_datatables_server_connect.php"
            });

            //CAPTCHA REFRESH ON CLICK
            $("#captcha_img").on("click", function()
            {
              $('#captcha_img').attr('src', 'PHP/captcha.php?' + $.now());
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
                cache: false,
                data: {
                  name: $("#name").val(),
                  email: $("#email").val(),
                  captcha: $("#captcha").val(),
                  text: $("#text").val()
                }
              }).done(function(data)
              {
                //RELOAD JQUERY DATATABLE

                $('#main_table').DataTable().ajax.reload();

                //UNBLOCK "SUBMIT" BUTTON

                $("#submit").prop("disabled", false);

                //PROCESSING RESPONSE FROM PHP FILE
                if (data == 0)
                {
                  alert('captcha incorrect');
                  //IF CAPTCHA WRONG REFRESH
                  $('#captcha_img').attr('src', 'PHP/captcha.php?' + $.now());
                }

                if(data == 12)
                {
                  alert('Email incorrect');
                }

                if (data == 1)
                {
                  //IF SUCCESSFUL ADD MESSAGE CLOSE FORM, CLEAR INPUT'S AND REFRESH CAPTCHA

                  $.fancybox.close();
                  document.getElementById("name").value = "";
                  document.getElementById("email").value = "";
                  document.getElementById("text").value = "";
                  document.getElementById("captcha").value = "";
                  document.getElementById("captcha").value = "";
                  $('#captcha_img').attr('src', 'PHP/captcha.php?' + $.now());

                }
              });
            });
          });
        });

        //HOME LOAD ON CLICK
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

        //BLOG LOAD ON CLICK
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

        //CONTACT LOAD ON CLICK
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
