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
                $("#message").simpleAlert({
                  message: "Usuario Loggeado con éxito!"
                });
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
               clearLoginForm();
             }
           }
       });
});

$("#con_registrarse").click(function(){
  $("#loginTitle").text('Registrar Cuenta');
  $("#loginForm").hide();
  $("#registerForm").show();
  $("#con_registrarse").hide();
  $("#con_iniciarSesion").show();
  $("#con_ingresar").hide();
  $("#con_crearUsuario").show();
});

$("#con_iniciarSesion").click(function(){
  $("#loginTitle").text('Iniciar Sesión');
  $("#loginForm").show();
  $("#registerForm").hide();
  $("#con_registrarse").show();
  $("#con_iniciarSesion").hide();
  $("#con_ingresar").show();
  $("#con_crearUsuario").hide();
});

var clearRegisterForm = function(){
    $("#login").hide();
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
  $("#login").hide();
  $("#con_emailInicioSesion").val("");
  $("#con_passwordInicioSesion").val("");
}

});
