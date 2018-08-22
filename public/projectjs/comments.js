$(document).ready(function(){
        $("#addNewComment").click(function(){
            var mensaje = $("#newComment").val();
            var idTour = $("#idTour").val();
              $.ajax({
                    type: 'GET',
                    data: {"mensaje":mensaje,
                           "idTour":idTour},
                    url: '/saveNewComments',
                    success: function(data) {
                        if(data == "error"){
                          $("#message").simpleAlert({
                            message: "Debes iniciar sesión para enviar comentario!"
                          });
                          $("#newComment").val("");
                          return false;
                        }else{
                          $("#message").simpleAlert({
                            message: "Comentario Guardado con exito!"
                          });
                          $("#newComment").val("");
                        }

                        $.ajax({
                              type: 'GET',
                              data: {"idTour":idTour},
                              url: '/loadComment',
                              success: function(data) {
                                $("#ulComments").html(data);
                              }
                          });
                        return false;
                    }
                });
        });
});
