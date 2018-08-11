var mensaje = $("#txt-mensaje");

function validar(){
    var listo=true;
    if(mensaje.val()==''){
        mensaje.removeClass("is-valid");
		mensaje.addClass("is-invalid");
		listo=false;
    }else{
		mensaje.removeClass("is-invalid");
		mensaje.addClass("is-valid");
    }
    return listo;
}

$("#btn-enviar").click(function(){
	if (validar()){
		var parametros = "&mensaje="+mensaje.val();
		console.log(parametros);
	}
});