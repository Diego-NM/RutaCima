$(document).ready(function(){

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


    if(name == ""){
      alert('Digite nombre');
     return false;
    }
    if(firstLastName == ""){
        alert('Digite primer apellido');
     return false;
    }
     if(secondLastName == ""){
       alert('Digite segundo apellido');
     return false;
     }
     if(idNumber == ""){
       alert('Digite cedula');
     return false;
     }
     if(age == ""){
        alert('Digite edad');
      return false;
     }
     if(email == ""){
   alert('Digite correo Electronico');
     return false;
     }
     if(telephone == ""){
        alert('Digite telefono');
      return false;
     }
     if(userName == ""){
        alert('Digite nombre de usuario');
      return false;
     }
     if(password == ""){
        alert('Digite contraseña');
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
                   'password':password },
           url: 'createUser',
           success: function(data) {
             alert("sucess");
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

});
