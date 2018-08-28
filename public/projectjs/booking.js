$(document).ready(function(){
  $("#CantidadPersonasReservacion").change(function(){
        var numPeople = $("#CantidadPersonasReservacion").val();
        var priceSelectedTour = $("#priceSelectedTour").val();
        $.ajax({
              type: 'GET',
              data: { 'numPeople':numPeople,
                      'price':priceSelectedTour },
              url: '/calculatePrice',
              success: function(data) {
                $("#CostoTotalReservacion").val(data);
              }
          });
  });


  $("#reservar").click(function(){
        var numPeople = $("#CantidadPersonasReservacion").val();
        var price = $("#CostoTotalReservacion").val();
        var idTour = $("#idTour").val();
        $.ajax({
              type: 'GET',
              data: { 'numPeople':numPeople,
                      'price':price,
                      'idTour':idTour},
              url: '/insertBooking',
              success: function(data) {
                    if(data == "error"){
                            $("#message").simpleAlert({
                              message: "Debes iniciar sesión para reservar!"
                            });
                            $("#CantidadPersonasReservacion").val("");
                            $("#CostoTotalReservacion").val("");
                            return false;
                    }else{
                      if(data == "CUPO_COMPLETO"){
                            $("#message").simpleAlert({
                              message: "El número de personas que quieren reservar excede el cupo del viaje!"
                            });
                            $("#CantidadPersonasReservacion").val("");
                            $("#CostoTotalReservacion").val("");
                            return false;
                      }else{
                           if(data == "YA_POSEE_RESERVACION"){
                             $("#message").simpleAlert({
                               message: "Su usuario ya posee una reservación asosiada!"
                             });
                             $("#CantidadPersonasReservacion").val("");
                             $("#CostoTotalReservacion").val("");
                             return false;
                           }else{
                            $("#message").simpleAlert({
                              message: "Reservación Guardada con exito,<br/>"+
                              "los administradores se pondran en contacto con usted. <br> Cuentas para Depositar: <br/> "+
                              "Grethel Rodríguez Aguilar <br/> ced 2 428 862 <br/>"+"1-	Mutual Alajuela <br/> N°122 200 85063293 <br/> cc80322200850632938 <br/>"+
                              "2-	BNCR  200 01 002 091422 0 <br/> cc15100220010914228 <br/>"+"3-	BCR 001 1554135 5 <br/> cc15202001155413551 <br/>"+"4- BAC 928582022 <br/> cc 10200009285820228 "
                            });
                            $("#CantidadPersonasReservacion").val("");
                            $("#CostoTotalReservacion").val("");
                            return false;
                           }
                      }
                    }
                    return false;
              }
          });
  });

});
