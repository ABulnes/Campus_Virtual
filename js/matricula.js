$.getScript("js/funciones.js");
var facultad = $("#slc-facultad");
clase = $("#slc-clase");
seccion = $("#slc-seccion"),
	flag = $("#flag").html();

var clase = $("#slc-clase"),
	aula = $("#slc-aula"),
	edificio = $("#slc-edificio"),
	hinicio = $("#txt-horai"),
	hfin = $("#txt-horaf"),
	cupos = $("#txt-cupos-max"),
	periodo = $("#txt-periodo");


//Funcion que se encarga de adecuar el contenido segun el usuario
function usoMatricula() {
	var flag = $("#flag").html();
	if (flag == 0) {
		if ($("#div-MatriculaAlumno").hasClass("d-none")) {
			$("#div-MatriculaAlumno").removeClass("d-none");
			$("#div-clasesAlumno").removeClass("d-none");
			$("#div-MatriculaDocente").addClass("d-none");
			$("#div-seccionesDocente").addClass("d-none");
		}
	} else {
		if (flag == 1) {
			if ($("#div-MatriculaDocente").hasClass("d-none")) {
				$("#div-MatriculaDocente").removeClass("d-none");
				$("#div-MatriculaAlumno").addClass("d-none");
				$("#div-clasesAlumno").addClass("d-none");
				$("#div-seccionesDocente").removeClass("d-none");

			}
		}
	}
}
$(document).ready(function () {
	usoMatricula();

	if (flag == 1) {
		$.ajax({
			url: "ajax/api.php?accion='obtenerInfoSeccion'",
			dataType: "json",
			success: function (respuesta) {
				console.log(respuesta);
				for (var i = 0; i < respuesta[0].clases.length; i++) {
					$("#slc-clase").append(
						'<option value=' + respuesta[0].clases[i].id_clase + '>' + respuesta[0].clases[i].nombre_clase + '</option>'
					);
				}
				for (var i = 0; i < respuesta[1].aula.length; i++) {
					$("#slc-aula").append(
						'<option value=' + respuesta[1].aula[i].id_aula + '>' + respuesta[1].aula[i].nombre_aula + '</option>'
					);
				}
				for (var i = 0; i < respuesta[2].edificio.length; i++) {
					$("#slc-edificio").append(
						'<option value=' + respuesta[2].edificio[i].id_edificio + '>' + respuesta[2].edificio[i].nombre_edificio + '</option>'
					);
				}
				$("#txt-periodo").attr("value", respuesta[3].periodo.id_periodo);
				$("#txt-periodo").val(respuesta[3].periodo.descripcion);
			},
			error: function (error) {
				console.log(error);
			}
		});
		$.ajax({
			url: "ajax/api.php?accion='obtenerSeccion'",
			dataType: "json",
			success: function (respuesta) {
				console.log(respuesta);
				if (respuesta.length != 0) {
					for (var i = 0; i < respuesta.length; i++) {
						$("#div-secciones").append(
							'<div class="row">'+
							'<div class="col-md-12">'+
								'<button class="float-right btn btn-outline-primary btn-sm ml-2" onclick="editarSeccion('+respuesta[i].id_seccion+')"><i class="fas fa-pencil-alt"></i></button>'+
								'<button class="float-right btn btn-outline-primary btn-sm" onclick="eliminarSeccion('+respuesta[i].id_seccion+')" ><i class="fas fa-times"></i></button>'+
								'<p class="mb-0 font-weight-bold">'+respuesta[i].nombre_clase+'</p>'+
								'<p class="mb-0 small">Hora Inicio: '+parseHora(respuesta[i].hora_inicio.date)+' /  Hora Fin: '+parseHora(respuesta[i].hora_fin.date)+'</p>'+
							'</div>'+
						'</div>'+
						'<hr>'
						);
					}
				} else {
					$("#div-secciones").html("<h5 class='text-center'>No tiene secciones creadas</h5>")
				}
			},
			error: function (error) {
				console.log(error);
			}
		});
	}
});


//Validacion del formulario 
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
function validarSeccion() {
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
	if (cupos.val() == '') {
		cupos.removeClass("is-valid");
		cupos.addClass("is-invalid");
		listo = false;
	} else {
		cupos.removeClass("is-invalid");
		cupos.addClass("is-valid");
	}


	return listo;
}


$("#btn-crear").click(function () {
	if (validarSeccion()) {
		var parametros = "clase=" + clase.val() +
			"&aula=" + aula.val() +
			"&edificio=" + edificio.val() +
			"&horai=" + hinicio.val() +
			"&horaf=" + hfin.val() +
			"&periodo=" + periodo.attr("value") +
			"&cupos=" + cupos.val();
		console.log(parametros);


	}
});