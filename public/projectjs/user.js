$(document).ready(function(){

$("#con_ingresar").click(function(){
      var email = $("#con_emailInicioSesion").val();
      var password = $("#con_passwordInicioSesion").val();

      if(email == ""){
        $("#message").simpleAlert({
          message: "Digite correo!"
        });
       return false;
      }
      if(password == ""){
        $("#message").simpleAlert({
          message: "Digite contraseña!"
        });
       return false;
      }
      $.ajax({
            type: 'GET',
            data: { 'email':email,
                    'password':password },
            url: 'validateUser',
            success: function(data) {
              if(data == 0){
                $("#message").simpleAlert({
                  message: "El usuario que intenta ingresar no existe!"
                });
                $("#con_emailInicioSesion").val("");
                $("#con_passwordInicioSesion").val("");
              }else{
                    window.location.href = "/mainAfterLogin";
                    clearLoginForm();
              }
            }
        });
});

$("#con_crearUsuario").click(function(){
  var name = $("#con_name").val();
  var firstLastName = $("#con_firstLastName").val();
  var secondLastName = $("#con_secondLastName").val();
  var idNumber = $("#con_idNumber").val();
  var age = $("#con_age").val();
  var email = $("#con_email").val();
  var telephone = $("#con_telephone").val();
  var userName =  $("#con_email").val();
  var password = $("#con_password").val();
  var rol = '3';

    if(name == ""){
      $("#message").simpleAlert({
        message: "Digite nombre!"
      });
     return false;
    }
    if(firstLastName == ""){
      $("#message").simpleAlert({
        message: "Digite primer apellido!"
      });
     return false;
    }
     if(secondLastName == ""){
       $("#message").simpleAlert({
         message: "Digite segundo apellido!"
       });
     return false;
     }
     if(idNumber == ""){
       $("#message").simpleAlert({
         message: "Digite Identificación!"
       });
     return false;
     }
     if(age == ""){
       $("#message").simpleAlert({
         message: "Seleccione Fecha de nacimiento!"
       });
      return false;
     }
     if(email == ""){
       $("#message").simpleAlert({
         message: "Digite Correo Electrónico!"
       });
     return false;
     }
     if(telephone == ""){
       $("#message").simpleAlert({
         message: "Digite telefono!"
       });
      return false;
     }
     if(userName == ""){
       $("#message").simpleAlert({
         message: "Digite nombre de usuario!"
       });
      return false;
     }
     if(password == ""){
       $("#message").simpleAlert({
         message: "Digite contraseña!"
       });
      return false;
     }

     $.ajax({
           type: 'GET',
           data: { 'name':name,
                   'firstLastName':firstLastName,
                   'secondLastName':secondLastName,
                   'idNumber':idNumber,
                   'age':age,
                   'email':email,
                   'telephone':telephone,
                   'userName':userName,
                   'password':password,
                   'rol':rol },
           url: 'createUser',
           success: function(data) {
             if(data == "existe"){
               $("#message").simpleAlert({
                 message: "El usuario que intenta ingresar ya existe!"
               });
             }else{
               $("#message").simpleAlert({
                 message: "Usuario Ingresado con éxito!"
               });
               clearCreateUserForm();
             }
           }
       });
});

$("#con_enviarContraseña").click(function(){
  var name = $("#con_nameReseteo").val();
  var email = $("#con_CorreoReseteo").val();

    if(name == ""){
      $("#message").simpleAlert({
        message: "Digite nombre!"
      });
     return false;
    }
    if(email == ""){
      $("#message").simpleAlert({
        message: "Digite primer apellido!"
      });
     return false;
    }

     $.ajax({
           type: 'GET',
           data: { 'name':name,
                   'email':email },
           url: 'resetPassword',
           success: function(data) {
             if(data == "No existe"){
               $("#message").simpleAlert({
                 message: "Este correo electronico no tiene una cuenta creada, registrese para crear una cuenta!"
               });
               clearForgotPasswordForm();
             }else{
               $("#message").simpleAlert({
                 message: "Se ha enviado la contraseña al correo electronico ingresado!"
               });
               clearForgotPasswordForm();
             }
           }
       });
});

$("#returnMainFromLogin").click(function(){
  window.location.href = "/";
});

$("#con_enviarReseteoContraseña").click(function(){
      var oldPass = $("#viejaContrasenna").val();
      var newPass = $("#nuevaContrasenna").val();
      var repNewPass = $("#Rep_nuevaContrasenna").val();

        if(oldPass == ""){
          $("#message").simpleAlert({
            message: "Digite contraseña anterior!"
          });
         return false;
        }
        if(newPass == ""){
          $("#message").simpleAlert({
            message: "Digite la nueva contraseña!"
          });
         return false;
        }
        if(repNewPass == ""){
          $("#message").simpleAlert({
            message: "Repita la nueva contraseña!"
          });
         return false;
        }
        if(newPass !== repNewPass){
          $("#message").simpleAlert({
            message: "Las nuevas contraseñas no son iguales!"
          });
         return false;
        }

         $.ajax({
               type: 'GET',
               data: { 'oldPass':oldPass,
                       'newPass':newPass },
               url: 'restorePassword',
               success: function(data) {
                 if(data === "CONTRASEÑA_ANTERIOR_INVALIDA"){
                   $("#message").simpleAlert({
                     message: "La contraseña Anterior no es correcta!"
                   });
                 }else{
                   $("#message").simpleAlert({
                     message: "Se ha cambiado la contraseña con exito!"
                   });
                 }
               }
           });
});

var clearRegisterForm = function(){
    $("#con_name").val("");
    $("#con_firstLastName").val("");
    $("#con_secondLastName").val("");
    $("#con_idNumber").val("");
    $("#con_age").val("");
    $("#con_email").val("");
    $("#con_telephone").val("");
    $("#con_password").val("");
}

var clearLoginForm = function(){
  $("#con_emailInicioSesion").val("");
  $("#con_passwordInicioSesion").val("");
}

var clearForgotPasswordForm = function(){
  $("#con_nameReseteo").val("");
  $("#con_CorreoReseteo").val("");
}

var clearCreateUserForm = function(){
  $("#con_name").val("");
  $("#con_firstLastName").val("");
  $("#con_secondLastName").val("");
  $("#con_idNumber").val("");
  $("#con_age").val("");
  $("#con_email").val("");
  $("#con_telephone").val("");
  $("#con_password").val("");
}

});
