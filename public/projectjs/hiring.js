$(document).ready(function(){


  $('#DivfechaContratacion').datetimepicker({
          format: 'mm/dd/yyyy HH:mm:ss',
          locale: 'es',
        })
  $('#DivfechaContratacionTaller').datetimepicker({
          format: 'mm/dd/yyyy HH:mm:ss',
          locale: 'es',
        })
  $('#DivfechaContratacionPrograma').datetimepicker({
          format: 'mm/dd/yyyy HH:mm:ss',
          locale: 'es',
        })
  $('#DivfechaContratacionOtro').datetimepicker({
          format: 'mm/dd/yyyy HH:mm:ss',
          locale: 'es',
        })

        //Taller

        //Taller
  $("#tallerContratacion").change(function(){
    if($("#tallerContratacion").val() == "otro"){
      $("#tallerOtro").show();
    }else{
      $("#tallerOtro").hide();
    }
  });
  $("#otrochkTaller").change(function(){
    if($("#otrochkTaller").prop('checked') == true){
      $("#tallerOtroExtra").show();
    }
  });
  $("#comidachkTaller").change(function(){
    if($("#comidachkTaller").prop('checked') == true){
    $("#tallerOtroExtra").hide();
    }
  });
  $("#estadischkTaller").change(function(){
      if($("#estadischkTaller").prop('checked') == true){
       $("#tallerOtroExtra").hide();
       }
  });

      //Tour
  $("#otrochkTour").change(function(){
    if($("#otrochkTour").prop('checked') == true){
    $("#tourOtroExtra").show();
    }
  });
  $("#paramedicochkTour").change(function(){
    if($("#paramedicochkTour").prop('checked') == true){
    $("#tourOtroExtra").hide();
    }
  });
  $("#comidachkTour").change(function(){
    if($("#paramedicochkTour").prop('checked') == true){
    $("#tourOtroExtra").hide();
     }
  });
  $("#estadischkTour").change(function(){
      if($("#estadischkTour").prop('checked') == true){
        $("#tourOtroExtra").hide();
      }
  });

      //Programa
  $("#programaContratacion").change(function(){
    if($("#programaContratacion").val() == "otro"){
      $("#programaOtro").show();
    }else{
      $("#programaOtro").hide();
    }
  });
  $("#otrochkPrograma").change(function(){
        if($("#otrochkPrograma").prop('checked') == true){
        $("#programaOtroExtra").show();
        }
  });
  $("#comidachkPrograma").change(function(){
    if($("#comidachkPrograma").prop('checked') == true){
    $("#programaOtroExtra").hide();
    }
  });
  $("#estadischkPrograma").change(function(){
    if($("#estadischkPrograma").prop('checked') == true){
    $("#programaOtroExtra").hide();
    }
  });

     //Otro otrochkOtro
  $("#otrochkOtro").change(function(){
      if($("#otrochkOtro").prop('checked') == true){
     $("#otroExtra").show();
     }
  });
  $("#comidachkOtro").change(function(){
    if($("#comidachkOtro").prop('checked') == true){
     $("#otroExtra").hide();
     }
  });
  $("#estadischkOtro").change(function(){
    if($("#estadischkOtro").prop('checked') == true){
     $("#otroExtra").hide();
     }
  });

  $.ajax({
        type: 'GET',
        data: {},
        url: 'selectTourForHire',
        success: function(data) {
           $("#tourContratacion").append(data);
           return false;
        }
    });

  $("#enviarContratacionTour").click(function(){
    var tour = $("#tourContratacion").val();
    var cantidadPersonas = $("#numeroPersonasContratacion").val();
    var fechaEvento = $("#fechaContratacion").val();
    var tipoEvento = $("#tipoEnvento").val();
    var extra = "";
    if(tour == ""){
      $("#message").simpleAlert({
        message: "Debe escoger el tour!"
      });
      return false;
    }
    if(cantidadPersonas == ""){
      $("#message").simpleAlert({
        message: "Debe escoger la cantidad de personas!"
      });
      return false;
    }
    if(fechaEvento  == ""){
      $("#message").simpleAlert({
        message: "Debe escoger la fecha del evento!"
      });
      return false;
    }
    if(tipoEvento  == ""){
      $("#message").simpleAlert({
        message: "Debe escoger el tipo de evento!"
      });
      return false;
    }

    if($("#comidachkTour").prop('checked') == true){
         extra = $("#comidachkTour").val();
    }
    if($("#estadischkTour").prop('checked') == true){
         extra = $("#estadischkTour").val();
    }
    if($("#comidachkTour").prop('checked') == true){
         extra = $("#estadischkTour").val();
    }
    if($("#otrochkTour").prop('checked') == true){
         extra = $("#tourOtroExtra").val();
    }
    $.ajax({
          type: 'GET',
          data: {'contratacion': tour,
                 'cantidadPersonas': cantidadPersonas,
                 'fechaEvento': fechaEvento,
                 'tipoEvento': tipoEvento,
                 'tipoServicio': 2,
                 'extra': extra},
          url: 'insertHiring',
          success: function(data) {
             if(data == 1){
               $("#message").simpleAlert({
                 message: "Contratación enviada con exito!, los administradores se comunicaran con usted"
               });
               clearTourHiring();
             }else{
               $("#message").simpleAlert({
                 message: "A ocurrido un error!, intentelo de nuevo"
               });
               clearTourHiring();
             }
          }
      });
  });

  $("#enviarTaller").click(function(){
    var tour = "";
    if($("#tallerContratacion").val() == "otro"){
      tour = $("#tallerOtro").val();
    }else{
      tour = $("#tallerContratacion").val();
    }
    var cantidadPersonas = $("#numPersonasTaller").val();
    var fechaEvento = $("#fechaTaller").val();
    var tipoEvento = $("#tipoEnventoTaller").val();
    var extra = "";
    if($("#comidachkTaller").prop('checked') == true){
         extra = $("#comidachkTaller").val();
    }
    if($("#estadischkTaller").prop('checked') == true){
         extra = $("#estadischkTaller").val();
    }
    if($("#otrochkTaller").prop('checked') == true){
         extra = $("#tallerOtroExtra").val();
    }

    if(tour == ""){
      $("#message").simpleAlert({
        message: "Debe escoger o colocar el taller!"
      });
      return false;
    }
    if(cantidadPersonas == ""){
      $("#message").simpleAlert({
        message: "Debe escoger la cantidad de personas!"
      });
      return false;
    }
    if(fechaEvento  == ""){
      $("#message").simpleAlert({
        message: "Debe escoger la fecha del evento!"
      });
      return false;
    }
    if(tipoEvento  == ""){
      $("#message").simpleAlert({
        message: "Debe escoger el tipo de evento!"
      });
      return false;
    }

    $.ajax({
          type: 'GET',
          data: {'contratacion': tour,
                 'cantidadPersonas': cantidadPersonas,
                 'fechaEvento': fechaEvento,
                 'tipoEvento': tipoEvento,
                 'tipoServicio': 1,
                 'extra': extra},
          url: 'insertHiring',
          success: function(data) {
             if(data == 1){
               $("#message").simpleAlert({
                 message: "Contratación enviada con exito!, los administradores se comunicaran con usted"
               });
               clearTourHiring();
             }else{
               $("#message").simpleAlert({
                 message: "A ocurrido un error!, intentelo de nuevo"
               });
               clearTourHiring();
             }
          }
      });
  });

  $("#enviarPrograma").click(function(){
    var tour = "";
    if($("#programaContratacion").val() == "otro"){
      tour = $("#programaOtro").val();
    }else{
      tour = $("#programaContratacion").val();
    }
    var cantidadPersonas = $("#numPrograma").val();
    var fechaEvento = $("#fechaPrograma").val();
    var tipoEvento = $("#tipoEnventoPrograma").val();
    var extra = "";
    if($("#comidachkPrograma").prop('checked') == true){
         extra = $("#comidachkPrograma").val();
    }
    if($("#estadischkPrograma").prop('checked') == true){
         extra = $("#estadischkPrograma").val();
    }
    if($("#otrochkPrograma").prop('checked') == true){
         extra = $("#programaOtroExtra").val();
    }

    if(tour == ""){
      $("#message").simpleAlert({
        message: "Debe escoger o colocar el programa!"
      });
      return false;
    }
    if(cantidadPersonas == ""){
      $("#message").simpleAlert({
        message: "Debe escoger la cantidad de personas!"
      });
      return false;
    }
    if(fechaEvento  == ""){
      $("#message").simpleAlert({
        message: "Debe escoger la fecha del evento!"
      });
      return false;
    }
    if(tipoEvento  == ""){
      $("#message").simpleAlert({
        message: "Debe escoger el tipo de evento!"
      });
      return false;
    }
    $.ajax({
          type: 'GET',
          data: {'contratacion': tour,
                 'cantidadPersonas': cantidadPersonas,
                 'fechaEvento': fechaEvento,
                 'tipoEvento': tipoEvento,
                 'tipoServicio': 3,
                 'extra': extra},
          url: 'insertHiring',
          success: function(data) {
             if(data == 1){
               $("#message").simpleAlert({
                 message: "Contratación enviada con exito!, los administradores se comunicaran con usted"
               });
               clearTourHiring();
             }else{
               $("#message").simpleAlert({
                 message: "A ocurrido un error!, intentelo de nuevo"
               });
               clearTourHiring();
             }
          }
      });
  });

  $("#enviarContratacionOtro").click(function(){
    var tour = $("#otraContratacion").val();
    var cantidadPersonas = $("#numPersonasOtro").val();
    var fechaEvento = $("#fechaOtro").val();
    var tipoEvento = $("#tipoEnventoOtro").val();
    var extra = "";
    if($("#comidachkOtro").prop('checked') == true){
         extra = $("#comidachkOtro").val();
    }
    if($("#estadischkOtro").prop('checked') == true){
         extra = $("#estadischkOtro").val();
    }
    if($("#otrochkOtro").prop('checked') == true){
         extra = $("#otroExtra").val();
    }

    if(tour == ""){
      $("#message").simpleAlert({
        message: "Debe colocar el servicio que requiere!"
      });
      return false;
    }
    if(cantidadPersonas == ""){
      $("#message").simpleAlert({
        message: "Debe escoger la cantidad de personas!"
      });
      return false;
    }
    if(fechaEvento  == ""){
      $("#message").simpleAlert({
        message: "Debe escoger la fecha del evento!"
      });
      return false;
    }
    if(tipoEvento  == ""){
      $("#message").simpleAlert({
        message: "Debe escoger el tipo de evento!"
      });
      return false;
    }
    $.ajax({
          type: 'GET',
          data: {'contratacion': tour,
                 'cantidadPersonas': cantidadPersonas,
                 'fechaEvento': fechaEvento,
                 'tipoEvento': tipoEvento,
                 'tipoServicio': 4,
                 'extra': extra},
          url: 'insertHiring',
          success: function(data) {
             if(data == 1){
               $("#message").simpleAlert({
                 message: "Contratación enviada con exito!, los administradores se comunicaran con usted"
               });
               clearTourHiring();
             }else{
               $("#message").simpleAlert({
                 message: "A ocurrido un error!, intentelo de nuevo"
               });
               clearTourHiring();
             }
          }
      });
  });

  $("#returnMainFromHiring").click(function(){
    window.location.href = "/mainAfterLogin";
  });



  var clearTourHiring = function(){
    $("#tourContratacion").val("");
    $("#numeroPersonasContratacion").val("");
    $("#fechaContratacion").val("");
    $("#tipoEnvento").val("");
    $("#descripcionContratacion").val("");
  }

});
