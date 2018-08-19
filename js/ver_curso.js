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
            console.log(respuesta);
            if (respuesta.length - 1 != 0) {
                for (var i = 0; i < respuesta.length - 1; i++) {
                    if (respuesta[respuesta.length - 1].flag == 1) {
                        $("#div-cursos").append(
                            '<div class="col-md-6 mt-2 mb-2 item-center">' +
                            '<a class="d-block cur-link " href="curso_x.php?id_curso=' + respuesta[i].id_curso + '">' +
                            '<div class="card p-2" style="width: 18rem;">' +
                            '<div class="item-center">' +
                            '<img src="img/curso-icon.png" alt="Card image cap">' +
                            '</div>' +
                            '<div class="card-body">' +
                            '<h5 class="card-title text-center">' + respuesta[i].nombre_curso + '</h5>' +
                            '<p class="card-text text-center" >' + respuesta[i].nombre_institucion + '</p>' +
                            '</div>' +
                            '</a>' +
                            '<div class="card-text">' +
                            '<button class="btn btn-outline-primary btn-sm position-relative float-right ml-2" onclick="eliminarCurso(' + respuesta[i].id_seccion + ')"><i class="fas fa-times"></i></button>' +
                            '<button class="btn btn-outline-primary btn-sm float-right" onclick="editarCurso(' + respuesta[i].id_seccion + ')"><i class="fas fa-pencil-alt"></i></button>' +
                            '</div>' +
                            '</div>'
                        );
                    } else {
                        if (respuesta[respuesta.length - 1].flag == 0) {
                            $("#div-cursos").append(
                                '<div class="col-md-6 mt-2 mb-2 item-center">' +
                                '<a class="d-block cur-link " href="curso_x.php?id_curso=' + respuesta[i].id_curso + '">' +
                                '<div class="card p-2" style="width: 18rem;">' +
                                '<div class="item-center">' +
                                '<img src="img/curso-icon.png" alt="Card image cap">' +
                                '</div>' +
                                '<div class="card-body">' +
                                '<h5 class="card-title text-center">' + respuesta[i].nombre_curso + '</h5>' +
                                '<p class="card-text text-center" >' + respuesta[i].nombre_institucion + '</p>' +
                                '</div>' +
                                '</a>' +
                                '</div>'
                            );
                        }

                    }

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

function eliminarCurso(id_seccion) {
    if (confirm("¿Esta seguro de eliminar este curso?")) {
        $.ajax({
            url: "ajax/api.php?accion='eliminarCurso'",
            data: "id_seccion=" + id_seccion,
            dataType: "json",
            success: function (respuesta) {
                alert(respuesta[0].mensaje);
                if (respuesta[1].codigo_error == 0) {
                    location.reload();
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
}

function editarCurso(id_seccion) {
    location.href = "form-curso.php?seccion=" + id_seccion;
}