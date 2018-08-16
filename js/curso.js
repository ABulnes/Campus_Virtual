var seccion = $("#slc-secciones"),
    n_curso = $("#txt-ncurso");
    descripcion = $("#txt-descripcion");

$(document).ready(function(){
    $.ajax({
        url: "ajax/api.php?accion='Login'",
        success:function(respuesta){
           if(respuesta==0){
               location.href = "index.html";
           }
        }
    });
});
/**
 * Funcion para validar el formulario
 */
function validar(){
    var listo = true;
    if(seccion.val()=='Seleccione seccion'){
        seccion.removeClass("is-valid");
        seccion.addClass("is-invalid");
        listo = false;
    }else{
        seccion.removeClass("is-invalid");
        seccion.addClass("is-valid");
    }

    if(n_curso.val()==''){
        n_curso.removeClass("is-valid");
        n_curso.addClass("is-invalid");
        listo = false;
    }else{
        n_curso.removeClass("is-invalid");
        n_curso.addClass("is-valid");
    }

    if(descripcion.val()==''){
        descripcion.removeClass("is-valid");
        descripcion.addClass("is-invalid");
        listo = false;
    }else{
        descripcion.removeClass("is-invalid");
        descripcion.addClass("is-valid");
    }

    return listo;
}

$("#btn-crear").click(function(){
    if(validar()){
        var parametros = "seccion="+seccion.val()+
                         "&nombre_curso="+n_curso.val()+
                         "&descripcion="+descripcion.val();
        console.log(parametros);   
    }
});