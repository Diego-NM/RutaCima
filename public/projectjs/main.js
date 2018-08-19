$(document).ready(function(){
        $.ajax({
              type: 'GET',
              data: {},
              url: 'selectTour',
              success: function(data) {
                if(data == "VACIO"){
                  return false;
                }else{
                  $("#toursDiv").html("");
                  $("#toursDiv").append(data);
                }

              }
          });

        $.ajax({
              type: 'GET',
              data: {},
              url: 'selectProducto',
              success: function(data) {
                if(data == "VACIO"){
                  return false;
                }else{
                  $("#ProductsDiv").append(data);
                }

              }
          });

        $("#filtroTour").change(function(){
             var filtro = $("#filtroTour").val();
             if(filtro === "Todos"){
                 $("#toursDiv").html("");
                 $.ajax({
                       type: 'GET',
                       data: {"filtro":filtro},
                       url: 'selectFilterAllTours',
                       success: function(data) {
                         if(data == "VACIO"){
                           $("#message").simpleAlert({
                             message: "No existen tours con la descripción que busca!"
                           });
                           return false;
                         }else{

                           $("#toursDiv").append(data);
                           return false;
                         }

                       }
                   });
             }
             if(filtro === "Mejor_Calificados"){
               $("#toursDiv").html("");
               $.ajax({
                     type: 'GET',
                     data: {"filtro":filtro},
                     url: 'selectFilterToursBetterRating',
                     success: function(data) {
                       if(data == "VACIO"){
                         $("#message").simpleAlert({
                           message: "No existen tours con la descripción que busca!"
                         });
                         return false;
                       }else{

                         $("#toursDiv").append(data);
                         return false;
                       }

                     }
                 });
             }
             if(filtro === "Mas_Reservados"){
               $("#toursDiv").html("");
               $.ajax({
                     type: 'GET',
                     data: {"filtro":filtro},
                     url: 'selectFilterToursMoreBooking',
                     success: function(data) {
                       if(data == "VACIO"){
                         $("#message").simpleAlert({
                           message: "No existen tours con la descripción que busca!"
                         });
                         return false;
                       }else{

                         $("#toursDiv").append(data);
                         return false;
                       }

                     }
                 });
             }
             if(filtro === "Nacionales"){
               $("#toursDiv").html("");
               $.ajax({
                     type: 'GET',
                     data: {"filtro":filtro},
                     url: 'selectFilterToursNacionals',
                     success: function(data) {
                       if(data == "VACIO"){
                         $("#message").simpleAlert({
                           message: "No existen tours con la descripción que busca!"
                         });
                         return false;
                       }else{

                         $("#toursDiv").append(data);
                         return false;
                       }

                     }
                 });
             }
             if(filtro === "Internacionales"){
               $("#toursDiv").html("");
               $.ajax({
                     type: 'GET',
                     data: {"filtro":filtro},
                     url: 'selectFilterToursInternacionals',
                     success: function(data) {
                       if(data == "VACIO"){
                         $("#message").simpleAlert({
                           message: "No existen tours con la descripción que busca!"
                         });
                         return false;
                       }else{

                         $("#toursDiv").append(data);
                         return false;
                       }

                     }
                 });
             }
        });

        $("#filtroTourAfter").change(function(){
             var filtro = $("#filtroTourAfter").val();
             $("#toursDiv").html("");
             $.ajax({
                   type: 'GET',
                   data: {"filtro":filtro},
                   url: 'selectFilterTours',
                   success: function(data) {
                     if(data == "VACIO"){
                       $("#message").simpleAlert({
                         message: "No existen tours con la descripción que busca!"
                       });
                       return false;
                     }else{

                       $("#toursDiv").append(data);
                       return false;
                     }

                   }
               });

        });
});
