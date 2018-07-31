$(document).ready(function(){
      $.ajax({
            type: 'GET',
            data: {},
            url: 'selectTour',
            success: function(data) {
              $("#toursDiv").append(data);
            }
        });

        $.ajax({
              type: 'GET',
              data: {},
              url: 'selectProducto',
              success: function(data) {
                $("#ProductsDiv").append(data);
              }
          });
});
