$(document).ready(function(){
      $.ajax({
            type: 'GET',
            data: {},
            url: 'selectTour',
            success: function(data) {
              $("#toursDiv").append(data);
            }
        });
});
