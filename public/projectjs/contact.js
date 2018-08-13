$(document).ready(function(){
    function validar_email( email )
     {
         var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         return regex.test(email) ? true : false;
     }

   $("#con_sendMessage").click(function(){
     var name = $("#con_nameContact").val();
     var email = $("#con_emailContact").val();
     var message = $("#con_messageContact").val();
     var validaEmail = validar_email(email);
     if(name == ""){
       $("#message").simpleAlert({
         message: "Debes colocar tu nombre!"
       });
       return false;
     }
     if(validaEmail == false){
       $("#message").simpleAlert({
         message: "Debes colocar un correo electronico valido!"
       });
       return false;
     }
     if(message == ""){
       $("#message").simpleAlert({
         message: "Debes colocar tu mensaje!"
       });
       return false;
     }
     $.ajax({
           type: 'GET',
           data: {'name':name,
                  'email':email,
                  'message':message},
           url: 'sendMail',
           beforeSend: function() {
               $("#contenedor_carga").show();
            },
           success: function(data) {
               if(data == 1){
                 $("#message").simpleAlert({
                   message: "Mensaje Enviado!"
                 });
                 $("#con_nameContact").val("");
                 $("#con_emailContact").val("");
                 $("#con_messageContact").val("");
               }
           },
           complete: function() {
               $("#contenedor_carga").hide();
           }
       });
   });

});
