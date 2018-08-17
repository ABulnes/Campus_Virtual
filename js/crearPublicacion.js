var tipoPublicacion = $("#slc-tipoPublicacion");
titulo = $("#txt-titulo");
descripcion = $("#txt-descripcion");
dia = $("#slc-dia");
mes = $("#slc-mes");
anio = $("#slc-anio");
preguntas = $("#preguntas");
preguntasSeleccionadas = $("#preguntas option:selected").length;



function validar() {
    var listo = true;

    if (tipoPublicacion.val() == 4) {

        if (titulo.val() == '') {
            titulo.removeClass("is-valid");
            titulo.addClass("is-invalid");
            listo = false;
        } else {
            titulo.removeClass("is-invalid");
            titulo.addClass("is-valid");
        }

        if (descripcion.val() == '') {
            descripcion.removeClass("is-valid");
            descripcion.addClass("is-invalid");
            listo = false;
        } else {
            descripcion.removeClass("is-invalid");
            descripcion.addClass("is-valid");
        }

        if (listo) {
            var parametros = "tipoPublicacion" + tipoPublicacion.val() +
                "&titulo" + titulo.val() +
                "&descripcion" + descripcion.val();
            console.log(parametros);

        }

    } else if (tipoPublicacion.val() == 1) {
        if (titulo.val() == '') {
            titulo.removeClass("is-valid");
            titulo.addClass("is-invalid");
            listo = false;
        } else {
            titulo.removeClass("is-invalid");
            titulo.addClass("is-valid");
        }

        if (descripcion.val() == '') {
            descripcion.removeClass("is-valid");
            descripcion.addClass("is-invalid");
            listo = false;
        } else {
            descripcion.removeClass("is-invalid");
            descripcion.addClass("is-valid");
        }

        if (dia.val() == 0) {
            dia.removeClass("is-valid");
            dia.addClass("is-invalid");
            listo = false;
        } else {
            dia.removeClass("is-invalid");
            dia.addClass("is-valid");
        }

        if (mes.val() == 0) {
            mes.removeClass("is-valid");
            mes.addClass("is-invalid");
            listo = false;
        } else {
            mes.removeClass("is-invalid");
            mes.addClass("is-valid");
        }

        if (anio.val() == 0) {
            anio.removeClass("is-valid");
            anio.addClass("is-invalid");
            listo = false;
        } else {
            anio.removeClass("is-invalid");
            anio.addClass("is-valid");
        }

        if (listo) {
            var parametros = "&tipoPublicacion" + tipoPublicacion.val() +
                "&titulo" + titulo.val() +
                "&descripcion" + descripcion.val() +
                "&dia" + dia.val() +
                "&mes" + mes.val() +
                "&anio" + anio.val();
            console.log(parametros);
        }
    } else if (tipoPublicacion.val() == 2) {
        if (titulo.val() == '') {
            titulo.removeClass("is-valid");
            titulo.addClass("is-invalid");
            listo = false;
        } else {
            titulo.removeClass("is-invalid");
            titulo.addClass("is-valid");
        }

        if (descripcion.val() == '') {
            descripcion.removeClass("is-valid");
            descripcion.addClass("is-invalid");
            listo = false;
        } else {
            descripcion.removeClass("is-invalid");
            descripcion.addClass("is-valid");
        }

        if (preguntasSeleccionadas.length > 0) {
            preguntas.removeClass('is-invalid');
            preguntas.addClass('is-valid');
        } else {
            preguntas.removeClass("is-valid");
            preguntas.addClass("is-invalid");
            listo = false;
        }

        if (listo) {
            var parametros = "&tipoPublicacion" + tipoPublicacion.val() +
                "&titulo" + titulo.val() +
                "&descripcion" + descripcion.val() +
                "preguntas" + preguntas.val();
            console.log(parametros);
        }

    }

}

$("#btn-crear").click(function () {
    validar();
});
$("#btn-cerrar").click(function () {
    $.ajax({
        url: "ajax/api.php?accion='Log-out'",
        success: function (respuesta) {
            console.log(respuesta);
            if (respuesta == 1){
                location.href="index.html";
            }
        }
    });
});