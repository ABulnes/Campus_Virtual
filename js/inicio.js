$.getScript("js/funciones.js");
$(document).ready(function () {
    var parametros = "id_usuario=" + 8 +
        "&flag=" + 0;
    $.ajax({
        data: parametros,
        url: "ajax/api.php?accion='obtenerPublicacion'",
        dataType: "json",
        success: function (respuesta) {

            if (respuesta[0].publicacion.length != 0) {
                for (var i = 0; i < respuesta[0].publicacion.length; i++) {
                    $("#div-publicaciones").append(
                        '<div class="row">' +
                        ' <div class="col-md-2 text-center">' +
                        '<i class="fas fa-user fa-2x"></i>' +
                        '</div>' +
                        '<div class="col-md-10">' +
                        ' <p class="mb-0 font-weight-bold">' + respuesta[0].publicacion[i].titulo + '</p>' +
                        '<p class="mb-0">' + respuesta[0].publicacion[i].descripcion + '</p>' +
                        '<p class="mb-0">' + respuesta[0].publicacion[i].nombre_curso + '</p>' +
                        '<p class="mb-0 small">' + respuesta[0].publicacion[i].fecha_creacion + '</p>' +
                        '</div>' +
                        '</div>' +
                        '<hr>'
                    );
                }
            } else {
                $("#div-publicaciones").html("<h5 class='text-center'>No hay publicaciones recientes</h5>")
            }

            if (respuesta[1].eventos.length != 0) {
                for (var j = 0; j < respuesta[1].eventos.length; j++) {
                    $("#div-eventos").append(
                        '<div class="row">' +
                        '<div class="col-md-2">' +
                        iconoEvento(respuesta[1].eventos[j].Flag) +
                        '</div>' +
                        '<div class="col-md-10">' +
                        '<p class="mb-0 font-weight-bold">' + respuesta[1].eventos[j].titulo + '</p>' +
                        '<p class="mb-0 small">' + parseFecha(respuesta[1].eventos[j].fecha_maxima.date) + '</p>' +
                        '</div>' +
                        '</div>' +
                        '<hr>'
                    );
                }
            } else {
                $("#div-eventos").html("<h5 class='text-center'>No hay eventos proximos</h5>")
            }
        },
        error: function (error) {
            console.log(error);
        }
    });

});