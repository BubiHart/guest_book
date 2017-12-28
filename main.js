$(document).ready(function()
  {
    $("#form").validate();
    $(".modalbox").fancybox();
    $('#main_table').dataTable
    (
     {
      "bProcessing": true,
      "bServerSide": true,
      "bRetrieve": true,
      "sAjaxSource": "jquery_datatables_server_connect.php"
     }
    );

    $('#home_link').click(function()
    {
      $("#home_link").prop("disabled", true);
    $.ajax
    ({
     url: "index.php",
     method: 'post',
     cache: false,
     success: function(html)
     {
       $(body).html(html);
       $("#submit").prop("disabled", false);
     }
    });
    if(pending)
    {
        return;
     }
    return false;


    });

    $('#guest_book_link').click(function()
    {
      $("#guest_book_link").prop("disabled", true);
    $.ajax
    ({
     url: "guest_book.php",
     method: 'post',
     cache: false,
     success: function(html)
     {
       $("#table").html(html);
       $("#guest_book_link").prop("disabled", false);
     }
    });
    if(pending)
    {
        return;
     }
    return false;


    });

    $('#blog_link').click(function()
    {
      $("#blog_link").prop("disabled", true);
    $.ajax
    ({
     url: "blog.php",
     method: 'post',
     cache: false,
     success: function(html)
     {
       $("#blog").html(html);
       $("#blog_link").prop("disabled", false);
     }
    });
    if(pending)
    {
        return;
     }
    return false;


    });

    $('#contact_link').click(function()
    {
    event.preventDefault();
      $("#contact_link").prop("disabled", true);
    $.ajax
    ({
     url: "contact.php",
     method: 'post',
     cache: false,
     success: function(html)
     {
       $("#contact").html(html);
       $("#contact_link").prop("disabled", false);
     }
    });
    if(pending)
    {
        return;
     }
    return false;


    });

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
        if($.trim($("#captcha").val()) === "")
        {
          alert('please enter field "captcha"');
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
                 captcha: $("#captcha").val(),
                 text: $("#text").val()
          }
        }).done(function(data)
        {

           $('#main_table').DataTable().ajax.reload();

          //UNBLOCK "SUBMIT" BUTTON

           $("#submit").prop("disabled", false);

          //PROCESSING RESPONSE FROM PHP FILE
           if(data == 0)
           {
             alert('captcha incorrect');
           }
           if(data == 1)
           {
             $.fancybox.close();
             document.getElementById("name").value = "";
             document.getElementById("email").value = "";
             document.getElementById("text").value = "";
             document.getElementById("captcha").value = "";
           }


        }
      );

    }
  );
  }
  );
