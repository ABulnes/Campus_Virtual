$.getScript("js/funciones.js");
var facultad = $("#slc-facultad");
clase = $("#slc-clase");
(seccion = $("#slc-seccion")), (flag = $("#flag").html());

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
        for (var i = 0; i < respuesta[0].clases.length; i++) {
          $("#slc-clase").append(
            "<option value=" +
            respuesta[0].clases[i].id_clase +
            ">" +
            respuesta[0].clases[i].nombre_clase +
            "</option>"
          );
        }
        for (var i = 0; i < respuesta[1].aula.length; i++) {
          $("#slc-aula").append(
            "<option value=" +
            respuesta[1].aula[i].id_aula +
            ">" +
            respuesta[1].aula[i].nombre_aula +
            "</option>"
          );
        }
        for (var i = 0; i < respuesta[2].edificio.length; i++) {
          $("#slc-edificio").append(
            "<option value=" +
            respuesta[2].edificio[i].id_edificio +
            ">" +
            respuesta[2].edificio[i].nombre_edificio +
            "</option>"
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
        if (respuesta.length != 0) {
          for (var i = 0; i < respuesta.length; i++) {
            $("#div-secciones").append(
              '<div class="row">' +
              '<div class="col-md-12">' +
              '<button class="float-right btn btn-outline-primary btn-sm ml-2" onclick="editarSeccion(' +
              respuesta[i].id_seccion +
              "," +
              respuesta[i].id_clase +
              "," +
              respuesta[i].id_aula +
              "," +
              respuesta[i].id_periodo +
              ')"><i class="fas fa-pencil-alt"></i></button>' +
              '<button class="float-right btn btn-outline-primary btn-sm" onclick="eliminarSeccion(' +
              respuesta[i].id_seccion +
              "," +
              respuesta[i].id_clase +
              "," +
              respuesta[i].id_aula +
              "," +
              respuesta[i].id_periodo +
              ')" ><i class="fas fa-times"></i></button>' +
              '<p class="mb-0 font-weight-bold">' +
              respuesta[i].nombre_clase +
              "</p>" +
              '<p class="mb-0 small">Hora Inicio: ' +
              parseHora(respuesta[i].hora_inicio.date) +
              " /  Hora Fin: " +
              parseHora(respuesta[i].hora_fin.date) +
              "</p>" +
              "</div>" +
              "</div>" +
              "<hr>"
            );
          }
        } else {
          $("#div-secciones").html(
            "<h5 class='text-center'>No tiene secciones creadas</h5>"
          );
        }
      },
      error: function (error) {
        console.log(error);
      }
    });
  } else {
    if (flag == 0) {
      $.ajax({
        url: "ajax/api.php?accion='obtenerClases'",
        dataType: "json",
        success: function (respuesta) {
          console.log(respuesta);
          for (var i = 0; i < respuesta.length; i++) {
            $("#slc-claseMatricular").append(
              '<option value="' + respuesta[i].id_clase + '">' + respuesta[i].nombre_clase + '</option>'
            );
          }

        },
        error: function (error) {
          console.log(error);
        }
      });
    }
  }
});

//Validacion del formulario
function validar() {
  var listo = true;
  if (facultad.val() == "") {
    facultad.removeClass("is-valid");
    facultad.addClass("is-invalid");
    listo = false;
  } else {
    facultad.removeClass("is-invalid");
    facultad.addClass("is-valid");
  }

  if (clase.val() == "") {
    clase.removeClass("is-valid");
    clase.addClass("is-invalid");
    listo = false;
  } else {
    clase.removeClass("is-invalid");
    clase.addClass("is-valid");
  }

  if (seccion.val() == "") {
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
    var parametros =
      "facultad=" +
      facultad.val() +
      "clase=" +
      clase.val() +
      "seccion" +
      seccion.val();
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
  if (hinicio.val() != "") {
    var h_inicio = hinicio.val();
    var shora = h_inicio.split(":")[0];
    var h_fin = parseInt(shora) + 1;
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

  if (clase.val() == "Seleccione clase") {
    clase.removeClass("is-valid");
    clase.addClass("is-invalid");
    listo = false;
  } else {
    clase.removeClass("is-invalid");
    clase.addClass("is-valid");
  }
  if (aula.val() == "Seleccione aula") {
    aula.removeClass("is-valid");
    aula.addClass("is-invalid");
    listo = false;
  } else {
    aula.removeClass("is-invalid");
    aula.addClass("is-valid");
  }
  if (edificio.val() == "Seleccione edificio") {
    edificio.removeClass("is-valid");
    edificio.addClass("is-invalid");
    listo = false;
  } else {
    edificio.removeClass("is-invalid");
    edificio.addClass("is-valid");
  }
  if (hinicio.val() == "") {
    hinicio.removeClass("is-valid");
    hinicio.addClass("is-invalid");
    listo = false;
  } else {
    hinicio.removeClass("is-invalid");
    hinicio.addClass("is-valid");
  }
  if (cupos.val() == "") {
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
    var parametros =
      "clase=" +
      clase.val() +
      "&aula=" +
      aula.val() +
      "&edificio=" +
      edificio.val() +
      "&horai=" +
      hinicio.val() +
      "&horaf=" +
      hfin.val() +
      "&periodo=" +
      periodo.attr("value") +
      "&cupos=" +
      cupos.val();
    console.log(parametros);
    $.ajax({
      url: "ajax/api.php?accion='crearSeccion'",
      data: parametros,
      dataType: "json",
      success: function (respuesta) {
        console.log(respuesta);
        alert(respuesta[0].mensaje);
        if (respuesta[1].codigo_error == 0) {
          $("#div-secciones").append(
            '<div class="row">' +
            '<div class="col-md-12">' +
            '<button class="float-right btn btn-outline-primary btn-sm ml-2" onclick="editarSeccion(' +
            respuesta[2].seccion.id_seccion +
            "," +
            respuesta[2].seccion.id_clase +
            "," +
            respuesta[2].seccion.id_aula +
            "," +
            respuesta[2].seccion.id_periodo +
            ')"><i class="fas fa-pencil-alt"></i></button>' +
            '<button class="float-right btn btn-outline-primary btn-sm" onclick="eliminarSeccion(' +
            respuesta[2].seccion.id_seccion +
            "," +
            respuesta[2].seccion.id_clase +
            "," +
            respuesta[2].seccion.id_aula +
            "," +
            respuesta[2].seccion.id_periodo +
            ')" ><i class="fas fa-times"></i></button>' +
            '<p class="mb-0 font-weight-bold">' +
            respuesta[2].seccion.nombre_clase +
            "</p>" +
            '<p class="mb-0 small">Hora Inicio: ' +
            parseHora(respuesta[2].seccion.hora_inicio.date) +
            " /  Hora Fin: " +
            parseHora(respuesta[2].seccion.hora_fin.date) +
            "</p>" +
            "</div>" +
            "</div>" +
            "<hr>"
          );
        }
      },
      error: function (error) {
        console.log(error);
      }
    });
  }
});

/**
 * Funcion que obtiene los parametros para eliminar secciones
 * @param {*} id_seccion
 * @param {*} id_clase
 * @param {*} id_aula
 * @param {*} id_periodo
 */
function eliminarSeccion(id_seccion, id_clase, id_aula, id_periodo) {
  if (confirm("¿Esta seguro de eliminar esta seccion?")) {
    var parametros =
      "id_seccion=" +
      id_seccion +
      "&id_clase=" +
      id_clase +
      "&id_aula=" +
      id_aula +
      "&id_periodo=" +
      id_periodo;
    $.ajax({
      url: "ajax/api.php?accion='eliminarSeccion'",
      data: parametros,
      dataType: "json",
      success: function (respuesta) {
        alert(respuesta[0].mensaje);
        if (respuesta[1].codigo_error == 0) {
          window.setTimeout(null, "3000");
          location.reload();
        }
      },
      error: function (error) {
        console.log(error);
      }
    });
  }
}

/**
 * Funcion que trae los parametros de la seccion para modificarlos
 * @param {*} id_seccion
 * @param {*} id_clase
 * @param {*} id_aula
 * @param {*} id_periodo
 */
function editarSeccion(id_seccion, id_clase, id_aula, id_periodo) {
  if ($("#div-editar").hasClass("d-none")) {
    $("#div-editar").removeClass("d-none");
  }
  $("#id_seccion").html(id_seccion);
  $.ajax({
    url: "ajax/api.php?accion='getEditarSeccion'",
    data: "id_seccion=" + id_seccion + "&id_aula=" + id_aula,
    dataType: "json",
    success: function (respuesta) {
      console.log(respuesta);
      $("#slc-clase").val(respuesta[0].id_clase);
      $("#slc-aula").val(respuesta[0].id_aula);
      $("#slc-edificio").val(respuesta[1].edificio.id_edificio);
      $("#txt-periodo").attr("value", respuesta[0].id_periodo);
      $("#txt-horai").val(parseHora(respuesta[0].hora_inicio.date));
      $("#txt-horaf").val(parseHora(respuesta[0].hora_fin.date));
      $("#txt-cupos-max").val(respuesta[0].max_cupos);
    },
    error: function (error) {
      console.log(error);
    }
  });
}

$("#btn-editar").click(function () {
  var parametros =
    "id_seccion=" +
    $("#id_seccion").html() +
    "&clase=" +
    clase.val() +
    "&aula=" +
    aula.val() +
    "&edificio=" +
    edificio.val() +
    "&horai=" +
    hinicio.val() +
    "&horaf=" +
    hfin.val() +
    "&periodo=" +
    periodo.attr("value") +
    "&cupos=" +
    cupos.val();
  $.ajax({
    url: "ajax/api.php?accion='modificarSeccion'",
    data: parametros,
    dataType: "json",
    success: function (respuesta) {
      console.log(respuesta);
      alert(respuesta[0].mensaje);
      if (respuesta[1].codigo_error == 0) {
        window.setTimeout(null, 3000);
        location.reload();
      }
    },
    error: function (error) {
      console.log(error);
    }
  });
});

$("#slc-claseMatricular").change(function () {
  var parametros = "id_clase=" + $("#slc-claseMatricular").val();
  $.ajax({
    url: "ajax/api.php?accion='getSeccionClase'",
    data: parametros,
    dataType: "json",
    success: function (respuesta) {
      if (respuesta.length != 0) {
        for (var i = 0; i < respuesta.length; i++) {
          $("#slc-seccion").append(
            '<option value="' + respuesta[i].id_seccion + '">' + parseHora(respuesta[i].hora_inicio.date) + ' / ' +
            parseHora(respuesta[i].hora_fin.date) + '    ' +
            respuesta[i].nombre_docente +
            ' Cupos disponibles: ' + respuesta[i].max_cupos + '</option>'
          );
        }
      } else {
        $("#slc-seccion").html("<option>No hay secciones disponibles para esta clase</option>");
      }
    },
    error: function (error) {

    }
  });
});