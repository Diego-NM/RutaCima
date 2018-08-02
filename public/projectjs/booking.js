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
                      $("#message").simpleAlert({
                        message: "Reservación Guardada con exito, los administradores se pondran en contacto con usted!"
                      });
                      $("#CantidadPersonasReservacion").val("");
                      $("#CostoTotalReservacion").val("");
                    }
                    return false;
              }
          });
  });

});
