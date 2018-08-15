$.getScript("js/funciones.js");

$(document).ready(function () {
    var flag = 0;
    var parametro = "id_usuario=" + 8 +
        "&flag=" + 0 +
        "&cflag=" + 0;
    $.ajax({
        url: "ajax/api.php?accion='obtenerPerfil'",
        data: parametro,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            $("#btn-usuario").html(respuesta[0].nombre_usuario)
            $("#h-uname").html(respuesta[0].p_nombre + " " + respuesta[0].s_nombre + " " + respuesta[0].p_apellido + " " + respuesta[0].s_apellido);
            $("#h-name").html(respuesta[0].nombre_usuario);
            if (flag == 0) {
                $("#h-tusuario").html("Alumno");
            } else {
                $("#h-tusuario").html("Docente");
            }
            $("#div-biografia").html(respuesta[0].biografia);
            $("#div-nac").html(parseFecha(respuesta[0].fecha_nacimiento.date));
            $("#div-intereses").html(respuesta[0].intereses);
            $("#div-correo").html(respuesta[0].correo);
            $("#div-telefono").html(respuesta[0].telefono);
            if (respuesta[1].cursos.length != 0) {
                for (var i = 0; i < respuesta[1].cursos.length; i++) {
                    $("#div-cursos").append(
                        '<div class="col-12">' +
                        '<div class="row">' +
                        '<div class="col-3 item-center">' +
                        '<i class="fas fa-users fa-3x"></i>' +
                        '</div>' +
                        '<div class="col-9">' +
                        '<a class="d-block">' + respuesta[1].cursos[i].nombre_curso + '</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>'
                    );
                }
            }else{
                $("#div-cursos").append(
                    '<div class="col-12">No posee cursos en este periodo</div>'
                        
                )
            }
        },
        error: function (error) {
            console.log(error);
        }
    });


});