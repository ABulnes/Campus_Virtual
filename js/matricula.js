var facultad = $("#slc-facultad");
clase = $("#slc-clase");
seccion = $("#slc-seccion");

$(document).ready(function () {
	$.ajax({
		url: "ajax/api.php?accion='Login'",
		success: function (respuesta) {
			if (respuesta == 0) {
				location.href = "index.html";
			}
		}
	});
});

function validar() {
	var listo = true;
	if (facultad.val() == '') {
		facultad.removeClass("is-valid");
		facultad.addClass("is-invalid");
		listo = false;
	} else {
		facultad.removeClass("is-invalid");
		facultad.addClass("is-valid");
	}

	if (clase.val() == '') {
		clase.removeClass("is-valid");
		clase.addClass("is-invalid");
		listo = false;
	} else {
		clase.removeClass("is-invalid");
		clase.addClass("is-valid");
	}

	if (seccion.val() == '') {
		seccion.removeClass("is-valid");
		seccion.addClass("is-invalid");
		listo = false;
	} else {
		seccion.removeClass("is-invalid");
		seccion.addClass("is-valid");
	}

	return listo;
}

$("#btn-matricular").click(function () {
	if (validar()) {
		var parametros = "facultad=" + facultad.val() +
			"clase=" + clase.val() +
			"seccion" + seccion.val();
		console.log(parametros);
	}
});