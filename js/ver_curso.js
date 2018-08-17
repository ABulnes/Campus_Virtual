$.getScript("js/funciones.js");
$(document).ready(function () {
    if ($("#flag").html() == 1) {
        if ($("#div-btn-docente").hasClass("d-none")) {
            $("#div-btn-docente").removeClass("d-none");
        }

    }
    $.ajax({
        url: "ajax/api.php?accion='obtenerEventos'",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.length != 0) {
                for (var j = 0; j < respuesta.length; j++) {
                    $("#div-eventos").append(
                        '<div class="row">' +
                        '<div class="col-md-2">' +
                        iconoEvento(respuesta[j].Flag) +
                        '</div>' +
                        '<div class="col-md-10">' +
                        '<p class="mb-0 font-weight-bold">' + respuesta[j].titulo + '</p>' +
                        '<p class="mb-0 small">' + parseFecha(respuesta[j].fecha_maxima.date) + '</p>' +
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

    $.ajax({
        url: "ajax/api.php?accion='obtenerCurso'",
        dataType: "json",
        success: function (respuesta) {
            if (respuesta.length != 0) {
                for (var i = 0; i < respuesta.length; i++) {
                    $("#div-cursos").append(
                        '<div class="col-md-6 mt-2 mb-2 item-center">' +
                        '<a class="d-block cur-link " href="curso_x.php?id_curso=' + respuesta[i].id_curso + '">' +
                        '<div class="card p-2" style="width: 18rem;">' +
                        '<img src="img/curso-icon.png" alt="Card image cap">' +
                        '<div class="card-body">' +
                        '<h5 class="card-title text-center">'+respuesta[i].nombre_curso+'</h5>' +
                        '<p class="card-text text-center" >'+respuesta[i].nombre_institucion+'</p>' +
                        '</div>' +
                        '</div>' +
                        '</a>' +
                        '</div>'
                    );
                }
            } else {
                $("#div-cursos").html("<h5 class='text-center'>No tiene cursos disponibles en este periodo</h5>")
            }
        },
        error: function (respuesta) {
            console.log(error);
        }
    });
});

$("#btn-cerrar").click(function () {
    $.ajax({
        url: "ajax/api.php?accion='Log-out'",
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta == 1) {
                location.href = "index.html";
            }
        }
    });
});

