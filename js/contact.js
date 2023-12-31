$(document).ready(function() {
  $("#submit_contact").click(function() {

      var is_validation = true;
      //simple validation at client's end
      //loop through each field and we simply change border color to red for invalid fields
      $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
          $(this).css('border-color','');
          if(!$.trim($(this).val())){ //if this field is empty
              $(this).css('border-color','red'); //change border color to red
              is_validation = false; //set do not is_validation flag
          }
          //check invalid email
          var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
              $(this).css('border-color','red'); //change border color to red
              is_validation = false; //set do not is_validation flag
          }
      });

      if(is_validation) //everything looks good! proceed...
      {
          //get input field values data to be sent to server
          post_data = {
              'user_name'		: $('input[name=name]').val(),
              'user_email'	: $('input[name=email]').val(),
              'phone_number'	: $('input[name=phone2]').val(),
              'subject'		: $('input[name=subject]').val(),
              'message'		: $('textarea[name=message]').val(),
              'captcha_answer': $('input[name=captcha_answer]').val()
          };

          //Ajax post data to server
          $.post('submit.php', post_data, function(response){
              if(response.type == 'error'){ //load json data from server and output message
                  output = '<div class="error">'+response.text+'</div>';
              }else{
                  output = '<div class="success">'+response.text+'</div>';
                  $("#contact_form  input[required=true], #contact_form textarea[required=true]").val('');
                  $("#contact_form #contact_body").slideUp(); //hide form after success
              }
              $("#contact_form #contact_results").hide().html(output).slideDown();
          }, 'json');
      }
  });

  //reset previously set border colors and hide all message on .keyup()
  $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
      $(this).css('border-color','');
      $("#result").slideUp();
  });
});