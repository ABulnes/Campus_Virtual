var pnombre = $("#txt-pnombre"),
    snombre = $("#txt-snombre"),
    papellido = $("#txt-papellido"),
    sapellido = $("#txt-sapellido"),
    numid = $("#txt-numid"),
    correo = $("#txt-correo"),
    telefono = $("#txt-telefono"),
    direccion = $("#txt-direccion"),
    m = $("#rd-Masculino"),
    f = $("#rd-Femenino"),
    dia = $("#slc-dia"),
    mes = $("#slc-mes"),
    año = $("#slc-anio"),
    alumno = $("#chk-alumno"),
    docente = $("#chk-docente"),
    nusuario = $("#txt-nusuario"),
    contraseña = $("#txt-contrasenia"),
    confirmar = $("#txt-confirmar"),
    cargo = $("#slc-cargo"),
    facultad = $("#slc-facultad");
var genero, tusuario;

$(document).ready(function () {
    for (var x = 1950; x < 2018; x++) {
        año.append(
            '<option value="' + x + '">' + x + '</option>'
        );
    }
    $.ajax({
        url: "ajax/api.php?accion='obtenerCargo_Facultad'",
        dataType: "json",
        success: function (respuesta) {
           
            for (var i = 0; i < respuesta[0].cargo.length; i++) {
                cargo.append(
                    '<option value="' + respuesta[0].cargo[i].id_cargo + '">' + respuesta[0].cargo[i].descripcion + '</option>'
                );
            }

            for (var j = 0; j < respuesta[1].facultad.length; j++) {
                facultad.append(
                    '<option value="' + respuesta[1].facultad[j].id_facultad + '">' + respuesta[1].facultad[j].nombre_facultad + '</option>'
                );
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
});
/**
 * Funcion de validacion de Correo
 */
function validarCorreo() {
    var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return (patron.test(correo.val()));
}
/**Funcion de validacion del formulario 1  */
function validar() {
    var listo = true;
    if (pnombre.val() == '') {
        pnombre.removeClass("is-valid");
        pnombre.addClass("is-invalid");
        listo = false;
    } else {
        pnombre.removeClass("is-invalid");
        pnombre.addClass("is-valid");
    }
    if (snombre.val() == '') {
        snombre.removeClass("is-valid");
        snombre.addClass("is-invalid");
        listo = false;
    } else {
        snombre.removeClass("is-invalid");
        snombre.addClass("is-valid");
    }
    if (papellido.val() == '') {
        papellido.removeClass("is-valid");
        papellido.addClass("is-invalid");
        listo = false;
    } else {
        papellido.removeClass("is-invalid");
        papellido.addClass("is-valid");
    }
    if (sapellido.val() == '') {
        sapellido.removeClass("is-valid");
        sapellido.addClass("is-invalid");
        listo = false;
    } else {
        sapellido.removeClass("is-invalid");
        sapellido.addClass("is-valid");
    }
    if (pnombre.val() == '') {
        pnombre.removeClass("is-valid");
        pnombre.addClass("is-invalid");
        listo = false;
    } else {
        pnombre.removeClass("is-invalid");
        pnombre.addClass("is-valid");
    }
    if (numid.val() == '') {
        numid.removeClass("is-valid");
        numid.addClass("is-invalid");
        listo = false;
    } else {
        numid.removeClass("is-invalid");
        numid.addClass("is-valid");
    }
    if (telefono.val() == '') {
        telefono.removeClass("is-valid");
        telefono.addClass("is-invalid");
        listo = false;
    } else {
        telefono.removeClass("is-invalid");
        telefono.addClass("is-valid");
    }
    if (direccion.val() == '') {
        direccion.removeClass("is-valid");
        direccion.addClass("is-invalid");
        listo = false;
    } else {
        direccion.removeClass("is-invalid");
        direccion.addClass("is-valid");
    }
    if (correo.val() == '') {
        correo.removeClass("is-valid");
        correo.addClass("is-invalid");
        $("#div-correo").html("Campo Obligatorio");
    } else {
        if (!validarCorreo()) {
            correo.removeClass("is-valid");
            correo.addClass("is-invalid");
            $("#div-correo").html("El formato del correo no es correcto");
            listo = false;
        } else {
            correo.removeClass("is-invalid");
            correo.addClass("is-valid");

        }
    }
    if ((!m.is(':checked')) && (!f.is(':checked'))) {
        m.removeClass("is-valid");
        m.addClass("is-invalid");
        f.removeClass("is-valid");
        f.addClass("is-invalid");
        listo = false;
    } else {
        if (m.is(':checked')) {
            genero = m.val();
            m.addClass("is-valid");
            m.removeClass("is-invalid");
            f.removeClass("is-invalid");
        } else {
            if (f.is(':checked')) {
                genero = f.val();
                f.addClass("is-valid");
                f.removeClass("is-invalid");
                m.removeClass("is-invalid");
            }
        }
    }
    if (dia.val() == '0') {
        dia.removeClass("is-valid");
        dia.addClass("is-invalid");
        listo = false;
    } else {
        dia.removeClass("is-invalid");
        dia.addClass("is-valid");
    }
    if (mes.val() == '0') {
        mes.removeClass("is-valid");
        mes.addClass("is-invalid");
        listo = false;
    } else {
        mes.removeClass("is-invalid");
        mes.addClass("is-valid");
    }
    if (año.val() == '0') {
        año.removeClass("is-valid");
        año.addClass("is-invalid");
        listo = false;
    } else {
        año.removeClass("is-invalid");
        año.addClass("is-valid");
    }
    if ((!alumno.is(':checked')) && (!docente.is(':checked'))) {
        alumno.removeClass("is-valid");
        alumno.addClass("is-invalid");
        docente.removeClass("is-valid");
        docente.addClass("is-invalid");
        listo = false;
    } else {
        if (alumno.is(':checked')) {
            tusuario = alumno.val();
            alumno.addClass("is-valid");
            alumno.removeClass("is-invalid");
            docente.removeClass("is-invalid");
        } else {
            if (docente.is(':checked')) {
                if (cargo.val() == 'Seleccione cargo' && facultad.val() == 'Seleccione facultad') {
                    cargo.removeClass("is-valid");
                    cargo.addClass("is-invalid");
                    facultad.removeClass("is-valid");
                    facultad.addClass("is-invalid");
                    listo = false;
                    return;
                } else {
                    cargo.addClass("is-valid");

                    cargo.removeClass("is-invalid");

                    facultad.addClass("is-valid");
                    facultad.removeClass("is-invalid");
                }
                tusuario = docente.val();
                docente.addClass("is-valid");
                docente.removeClass("is-invalid");
                alumno.removeClass("is-invalid");

            }
        }
    }
    return listo;

}

/**
 *Funcion de validacion del formulario 2
 */
function validarF() {
    var listo = true;
    if (nusuario.val() == '') {
        nusuario.removeClass("is-valid");
        nusuario.addClass("is-invalid");
        listo = false;
    } else {
        nusuario.removeClass("is-invalid");
        nusuario.addClass("is-valid");
    }
    if (contraseña.val() == '') {
        $("#div-contraseña").html("Campo Obligatorio");
        contraseña.removeClass("is-valid");
        contraseña.addClass("is-invalid");
        listo = false;
    } else {
        contraseña.removeClass("is-invalid");
        contraseña.addClass("is-valid");
    }
    if (confirmar.val() == '') {
        $("#div-confirmar").html("Campo Obligatorio");
        confirmar.removeClass("is-valid");
        confirmar.addClass("is-invalid");
        listo = false;
    } else {
        if (confirmar.val() != contraseña.val()) {
            $("#div-contraseña").html("");
            $("#div-confirmar").html("Las contraseñas no coinciden");
            contraseña.removeClass("is-valid");
            contraseña.addClass("is-invalid");
            confirmar.removeClass("is-valid");
            confirmar.addClass("is-invalid");
            listo = false;
        } else {
            confirmar.removeClass("is-invalid");
            confirmar.addClass("is-valid");
        }
    }


    return listo;
}

/**
 * Accion del boton siguiente
 */
$("#btn-siguiente").click(function () {
    if (validar()) {
        $("#form-1").fadeOut("slow", function () {
            $("#form-2").removeClass("d-none");
        });

    }
});

/**
 * Accion del boton guardar
 */
$("#btn-finalizar").click(function () {
    if (validarF()) {
        var fecha_nac = año.val() + "-" + mes.val() + "-" + dia.val();
        var parametros = "pnombre=" + pnombre.val() +
            "&snombre=" + snombre.val() +
            "&papellido=" + papellido.val() +
            "&sapellido=" + sapellido.val() +
            "&id=" + numid.val() +
            "&correo=" + correo.val() +
            "&telefono=" + telefono.val() +
            "&direccion=" + direccion.val() +
            "&genero=" + genero +
            "&fecha_nac=" + fecha_nac +
            "&tusuario=" + tusuario +
            "&nusuario=" + nusuario.val() +
            "&contrasenia=" + contraseña.val() +
            "&cargo=" + cargo.val() +
            "&facultad=" + facultad.val();
        console.log(parametros);
        $.ajax({
            url: "ajax/api.php?accion='agregarUsuario'",
            data: parametros,
            dataType: "json",
            success: function (respuesta) {
                console.log(respuesta);
                alert(respuesta[0].mensaje);
                if (respuesta[1].codigo_error == 0) {
                    window.setTimeout(null, 5000);
                    location.href = "login.html";
                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
});

docente.change(function () {
    if (docente.is(":checked")) {
        $("#div-idocente").removeClass("d-none");
    }
});

alumno.change(function () {
    if (alumno.is(":checked")) {
        if (!$("#div-idocente").hasClass("d-none")) {
            $("#div-idocente").addClass("d-none");
        }
    }
});