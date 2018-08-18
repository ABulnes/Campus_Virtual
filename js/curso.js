var seccion = $("#slc-secciones"),
    n_curso = $("#txt-ncurso");
descripcion = $("#txt-descripcion");

$(document).ready(function () {
    $.ajax({
        url: "ajax/api.php?accion='obtenerSeccion'",
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta.length != 0) {
                for (var i = 0; i < respuesta.length; i++) {
                    $("#slc-secciones").append(
                        '<option value="' + respuesta[i].id_seccion + '">' + respuesta[i].nombre_clase + '</option>'
                    );
                }
            } else {
                alert("No posee secciones para crear cursos");
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
    //Parte de la modificacion del curso
    if ($("#id_seccion").html() != undefined) {
        if ($("#div-editar").hasClass("d-none")) {
            $("#div-editar").removeClass("d-none");
            $("#div-crear").addClass("d-none");
            var parametros = "id_seccion=" + $("#id_seccion").html();
            $.ajax({
                url: "ajax/api.php?accion='obtenerEditarCurso'",
                data: parametros,
                dataType: "json",
                success: function (respuesta) {
                    console.log(respuesta);
                    console.log(respuesta[0].nombre_curso);
                    $("#slc-secciones").val(respuesta[0].id_seccion);
                    $("#txt-ncurso").val(respuesta[0].nombre_curso);
                    $("#txt-descripcion").val(respuesta[0].descripcion);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }


    }

});

/**
 * Funcion para validar el formulario
 */
function validar() {
    var listo = true;
    if (seccion.val() == 'Seleccione seccion') {
        seccion.removeClass("is-valid");
        seccion.addClass("is-invalid");
        listo = false;
    } else {
        seccion.removeClass("is-invalid");
        seccion.addClass("is-valid");
    }

    if (n_curso.val() == '') {
        n_curso.removeClass("is-valid");
        n_curso.addClass("is-invalid");
        listo = false;
    } else {
        n_curso.removeClass("is-invalid");
        n_curso.addClass("is-valid");
    }

    if (descripcion.val() == '') {
        descripcion.removeClass("is-valid");
        descripcion.addClass("is-invalid");
        listo = false;
    } else {
        descripcion.removeClass("is-invalid");
        descripcion.addClass("is-valid");
    }

    return listo;
}

$("#btn-crear").click(function () {
    if (validar()) {
        var parametros = "seccion=" + seccion.val() +
            "&nombre_curso=" + n_curso.val() +
            "&descripcion=" + descripcion.val();
        $.ajax({
            url: "ajax/api.php?accion='crearCurso'",
            data: parametros,
            dataType: "json",
            success: function (respuesta) {
                alert(respuesta[0].mensaje);
                if (respuesta[1].codigo_error == 0) {
                    location.href = "cursos.php";
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
});

$("#btn-editar").click(function () {
    var parametros = "seccion=" + seccion.val() +
        "&nombre_curso=" + n_curso.val() +
        "&descripcion=" + descripcion.val();
    $.ajax({
        url: "ajax/api.php?accion='editarCurso'",
        data: parametros,
        dataType: "json",
        success: function (respuesta) {
            alert(respuesta[0].mensaje);
            if (respuesta[1].codigo_error == 0) {
                location.href = "cursos.php";
            }
        },
        error: function (error) {
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