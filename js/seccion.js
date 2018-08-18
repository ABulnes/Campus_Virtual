var clase = $("#slc-clase"),
    aula = $("#slc-aula"),
    edificio = $("#slc-edificio"),
    hinicio = $("#txt-horai"),
    hfin = $("#txt-horaf"),
   
var cad = '';

/**
 * Funcion que valida la hora automaticamente
 */
hinicio.focusout(function () {
    if (hinicio.val() != '') {
        var h_inicio = hinicio.val();
        var shora = h_inicio.split(":")[0];
        var h_fin = (parseInt(shora) + 1);
        var fhora = new Date().setTime(h_fin);
        if (h_fin < 10) {
            hfin.val("0" + fhora + ":" + "00" + ":" + "00");
        } else {
            hfin.val(fhora + ":" + "00" + ":" + "00");
        }

    }
});
/**
 * Funcion de validacion del formulario
 */
function validar() {
    var listo = true;

    if (clase.val() == 'Seleccione clase') {
        clase.removeClass("is-valid");
        clase.addClass("is-invalid");
        listo = false;
    } else {
        clase.removeClass("is-invalid");
        clase.addClass("is-valid");

    }
    if (aula.val() == 'Seleccione aula') {
        aula.removeClass("is-valid");
        aula.addClass("is-invalid");
        listo = false;
    } else {
        aula.removeClass("is-invalid");
        aula.addClass("is-valid");

    }
    if (edificio.val() == 'Seleccione edificio') {
        edificio.removeClass("is-valid");
        edificio.addClass("is-invalid");
        listo = false;
    } else {
        edificio.removeClass("is-invalid");
        edificio.addClass("is-valid");

    }
    if (hinicio.val() == '') {
        hinicio.removeClass("is-valid");
        hinicio.addClass("is-invalid");
        listo = false;
    } else {
        hinicio.removeClass("is-invalid");
        hinicio.addClass("is-valid");

    }

    

    return listo;
}


$("#btn-crear").click(function () {
    if (validar()) {
        var parametros = "clase=" + clase.val() +
            "&aula=" + aula.val() +
            "&edificio=" + edificio.val() +
            "&horai=" + hinicio.val() +
            "&horaf=" + hfin.val();
        console.log(parametros);


    }
});