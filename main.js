$(document).ready(function()
  {
    $("#form").validate();
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
    $("#submit").on("click", function()
    {
      /*
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
        */

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
