$(document).ready(function(){
        $.ajax({
              type: 'GET',
              data: {},
              url: 'selectTour',
              success: function(data) {
                $("#toursDiv").append(data);
                return false;
              }
          });

        $("#returnMainFromTourDetail").click(function(){
          window.location.href = "/";
        });

        $('input:radio[name=estrellas]').change(function(){
         var value  = 0;
         if($("#1estrella").prop("checked") == true && $("#2estrella").prop("checked") == false && $("#3estrella").prop("checked") == false && $("#4estrella").prop("checked") == false && $("#5estrella").prop("checked") == false){
          value = 1;
         }
         if($("#1estrella").prop("checked") == false && $("#2estrella").prop("checked") == true && $("#3estrella").prop("checked") == false && $("#4estrella").prop("checked") == false && $("#5estrella").prop("checked") == false){
          value = 2;
         }
         if($("#1estrella").prop("checked") == false && $("#2estrella").prop("checked") == false && $("#3estrella").prop("checked") == true && $("#4estrella").prop("checked") == false && $("#5estrella").prop("checked") == false){
          value = 3;
         }
         if($("#1estrella").prop("checked") == false && $("#2estrella").prop("checked") == false && $("#3estrella").prop("checked") == false && $("#4estrella").prop("checked") == true && $("#5estrella").prop("checked") == false){
          value = 4;
         }
         if($("#1estrella").prop("checked") == false && $("#2estrella").prop("checked") == false && $("#3estrella").prop("checked") == false && $("#4estrella").prop("checked") == false && $("#5estrella").prop("checked") == true){
          value = 5;
         }
         var idTour =  $("#idTour").val();
         $.ajax({
               type: 'GET',
               data: {
                 "idTour": idTour,
                 "value":value},
               url:  '/insertRating',
               success: function(data) {
                 if(data == "error"){
                   $("#message").simpleAlert({
                     message: "Debes iniciar sesión para calificar!"
                   });
                   $("#1estrella").prop("checked", false);
                   $("#2estrella").prop("checked", false);
                   $("#3estrella").prop("checked", false);
                   $("#4estrella").prop("checked", false);
                   $("#5estrella").prop("checked", false);
                   return false;
                 }else{
                   $("#message").simpleAlert({
                     message: "Calificacion Guardada con exito!"
                   });
                 }
                 return false;
               }
           });



       });

});
