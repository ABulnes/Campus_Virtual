var correo = $("#txt-correo");
    contraseña = $("#txt-contraseña");

function validar(){
    var listo=true;
    if(correo.val()==''){
        correo.removeClass("is-valid");
		correo.addClass("is-invalid");
		listo=false;
    }else{
		correo.removeClass("is-invalid");
		correo.addClass("is-valid");
    }
    
    if(contraseña.val()==''){
        contraseña.removeClass("is-valid");
		contraseña.addClass("is-invalid");
		listo=false;
    }else{
		contraseña.removeClass("is-invalid");
		contraseña.addClass("is-valid");
    }
    return listo;
}

$("#btn-ingresar").click(function(){
	if (validar()){
		var parametros = "&correo="+correo.val()+
						 "&contraseña="+contraseña.val();
		console.log(parametros);
	}
});
    