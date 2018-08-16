var correo = $("#txt-correo");
contraseña = $("#txt-contraseña");


function validarCorreo() {
    var patron = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return (patron.test(correo.val()));
}

function validar() {
    var listo = true;
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

    if (contraseña.val() == '') {
        contraseña.removeClass("is-valid");
        contraseña.addClass("is-invalid");
        listo = false;
    } else {
        contraseña.removeClass("is-invalid");
        contraseña.addClass("is-valid");
    }
    return listo;
}

$("#btn-ingresar").click(function () {
    if (validar()) {
        var parametros = "correo=" + correo.val() +
            "&contraseña=" + contraseña.val();
            console.log(parametros);
        $.ajax({
            url: "ajax/api.php?accion='iniciarSesion'",
            data: parametros,
            dataType: "json",
            success: function (respuesta) {
                console.log(respuesta);
                if (respuesta[1].codigo_error == 0){
                    window.setTimeout(null,3000);
                    location.href="home.html";
                }
            },
            error: function (error) {
                console.log(error);
            }
        });


    }
});