var info_cuenta = $("#link-cuenta"),
    info_not = $("#link-not"),
    info_msj = $("#link-msj"),
    info_amg = $("#link-amg"),
    cuenta = $("#div-info"),
    notifi = $("#div-notificaciones"),
    mensaje = $("#div-mensajes"),
    amigos = $("#div-amigos");

$(document).ready(function () {

    var parametro = "id_usuario=" + 6 +
        "&flag=" + 0 +
        "&cflag=" + 1;
    $.ajax({
        url: "ajax/api.php?accion='obtenerPerfil'",
        data: parametro,
        dataType: "json",
        success: function (respuesta) {
            $("#btn-usuario").html(respuesta[0].nombre_usuario);
            $("#txt-pnombre").val(respuesta[0].p_nombre);
            $("#txt-snombre").val(respuesta[0].s_nombre);
            $("#txt-papellido").val(respuesta[0].p_apellido);
            $("#txt-sapellido").val(respuesta[0].s_apellido);
            $("#txt-nusuario").val(respuesta[0].nombre_usuario);
            $("#txt-biografia").val(respuesta[0].biografia);
            $("#txt-interes").val(respuesta[0].intereses);
            $("#txt-correo").val(respuesta[0].correo);
            $("#txt-telefono").val(respuesta[0].telefono);
            if (respuesta[1].config.notifiacion_curso == 'A') {
                $("#slc-acceso option[value='A']").attr("selected", true);
            } else {
                $("#slc-acceso option[value='I']").attr("selected", true);
            }
            if (respuesta[1].config.notificacion_publicacion == 'A') {
                $("#slc-not-pub option[value='A']").attr("selected", true);
            } else {
                $("#slc-not-pub option[value='I']").attr("selected", true);
            }
            switch (respuesta[1].config.envio_mensaje) {
                case 'T':
                    $("#slc-mensaje option[value='T']").attr("selected", true);
                    break;
                case 'A':
                    $("#slc-mensaje option[value='A']").attr("selected", true);
                    break;
                case 'N':
                    $("#slc-mensaje option[value='N']").attr("selected", true);
                    break;
            }
            switch (respuesta[1].config.config_amigos) {
                case 'T':
                    $("#slc-amigos option[value='T']").attr("selected", true);
                    break;
                case 'A':
                    $("#slc-amigos option[value='A']").attr("selected", true);
                    break;
                case 'N':
                    $("#slc-amigos option[value='N']").attr("selected", true);
                    break;
            }
            if (respuesta[1].config.notificacion_solicitud == 'A') {
                $("#slc-not-amg option[value='A']").attr("selected", true);
            } else {
                $("#slc-not-amg option[value='I']").attr("selected", true);
            }
        }
    });
});
/**
 * Funcion que activa los botones en funcion del origen
 * @param {*} btn_origen 
 * @param {*} btn_destino 
 */
function verificarNav(btn_origen, btn_destino) {
    if (btn_origen.hasClass("active")) {
        btn_origen.removeClass("active");
        btn_destino.addClass("active");
    }
}
/**
 * Funcion que activa los div's correspindientes
 * @param {*} div_origen 
 * @param {*} div_destino 
 */
function cambiarDiv(div_origen, div_destino) {
    if (!div_origen.hasClass("d-none")) {
        div_origen.addClass("d-none");
        div_destino.removeClass("d-none");
    }
}

/**
 * Funcion que encuentra cual boton esta activado
 */
function findOrigen() {
    if (info_cuenta.hasClass("active")) {
        return info_cuenta;
    }
    if (info_not.hasClass("active")) {
        return info_not;
    }
    if (info_msj.hasClass("active")) {
        return info_msj;
    }
    if (info_amg.hasClass("active")) {
        return info_amg;
    }



}

/**
 * Funcion que retorna el div que esta activo
 */
function findOrigenDiv() {
    if (!cuenta.hasClass("d-none")) {
        return cuenta;
    }
    if (!notifi.hasClass("d-none")) {
        return notifi;
    }
    if (!mensaje.hasClass("d-none")) {
        return mensaje;
    }
    if (!amigos.hasClass("d-none")) {
        return amigos;
    }



}

/**
 * Funcion que retorna el boton correspondiente
 * @param {*} btn 
 */
function findDestino(btn) {
    var btn_destino;
    switch (btn) {
        case 'info_cuenta':
            btn_destino = info_cuenta;
            break;
        case 'info_not':
            btn_destino = info_not;
            break;
        case 'info_msj':
            btn_destino = info_msj;
            break;
        case 'info_amg':
            btn_destino = info_amg;
            break;
    }
    return btn_destino;
}
/**
 * Funcion que retorna el div asociado al boton
 * @param {*} div 
 */
function findDestinoDiv(div) {
    var div_destino;
    switch (div) {
        case 'cuenta':
            div_destino = cuenta;
            break;
        case 'notificacion':
            div_destino = notifi;
            break;
        case 'mensaje':
            div_destino = mensaje;
            break;
        case 'amigos':
            div_destino = amigos;
            break;
    }
    return div_destino;
}

/**
 * Funcion que cambia la navegacion 
 * @param {*} btn 
 */
function Navegacion(btn, div) {

    var btn_origen = findOrigen();
    var btn_destino = findDestino(btn);
    var div_origen = findOrigenDiv();

    var div_destino = findDestinoDiv(div);

    cambiarDiv(div_origen, div_destino);
    verificarNav(btn_origen, btn_destino);

}