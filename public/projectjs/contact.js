$(document).ready(function(){
   $("#con_sendMessage").click(function(){
     var name = $("#con_nameContact").val();
     var email = $("#con_emailContact").val();
     var message = $("#con_messageContact").val();
     $.ajax({
           type: 'GET',
           data: {'name':name,
                  'email':email,
                  'message':message},
           url: 'sendMail',
           success: function(data) {
               if(data == 1){
                 $("#message").simpleAlert({
                   message: "Mensaje Enviado!"
                 });
                 $("#con_nameContact").val("");
                 $("#con_emailContact").val("");
                 $("#con_messageContact").val("");
               }
           }
       });
   });

});
