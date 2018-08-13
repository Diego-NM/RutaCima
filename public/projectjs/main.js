$(document).ready(function(){
      $.ajax({
            type: 'GET',
            data: {},
            url: 'selectTour',
            success: function(data) {
              if(data == "VACIO"){
                return false;
              }else{
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
});
