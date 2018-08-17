var clase = $("#slc-clase"),
    aula = $("#slc-aula"),
    edificio = $("#slc-edificio"),
    hinicio = $("#txt-horai"),
    hfin = $("#txt-horaf"),
    lu = $("#chk-Lu"),
    ma = $("#chk-Ma"),
    mi = $("#chk-Mi"),
    ju = $("#chk-Ju"),
    vi = $("#chk-Vi"),
    sa = $("#chk-Sa");
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

    var contador = 0;
    $("input[name='chk-uv']").each(function () {
        if ($(this).is(':checked')) {
            contador++;
            cad = cad + $(this).attr('id').split("-")[1];

        }
    });
    console.log(contador);
    if (contador != 5) {
        lu.removeClass("is-valid");
        ma.removeClass("is-valid");
        mi.removeClass("is-valid");
        ju.removeClass("is-valid");
        vi.removeClass("is-valid");
        sa.removeClass("is-valid");
        lu.addClass("is-invalid");
        ma.addClass("is-invalid");
        mi.addClass("is-invalid");
        ju.addClass("is-invalid");
        vi.addClass("is-invalid");
        sa.addClass("is-invalid");
    } else {
        lu.removeClass("is-invalid");
        ma.removeClass("is-invalid");
        mi.removeClass("is-invalid");
        ju.removeClass("is-invalid");
        vi.removeClass("is-invalid");
        sa.removeClass("is-invalid");
        lu.addClass("is-valid");
        ma.addClass("is-valid");
        mi.addClass("is-valid");
        ju.addClass("is-valid");
        vi.addClass("is-valid");
        sa.addClass("is-valid");
    }

    return listo;
}


$("#btn-crear").click(function () {
    if (validar()) {
        var parametros = "clase=" + clase.val() +
            "&aula=" + aula.val() +
            "&edificio=" + edificio.val() +
            "&horai=" + hinicio.val() +
            "&horaf=" + hfin.val() +
            "&dias=" + cad;
        console.log(parametros);


    }
});