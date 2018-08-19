
/**
 * Funcion que parsea la fecha a un formato ligero
 * @param {*} fecha 
 */
function parseFecha(fecha) {
    var sfecha = fecha.split("-");
    var dia = sfecha[2].split(" ");
    var ffecha = dia[0];
    switch (sfecha[1]) {
        case '01':
            ffecha = ffecha + " Enero";
            break;
        case '02':
            ffecha = ffecha + " Febrero";
            break;
        case '03':
            ffecha = ffecha + " Marzo";
            break;
        case '04':
            ffecha = ffecha + " Abril";
            break;
        case '05':
            ffecha = ffecha + " Mayo";
            break;
        case '06':
            ffecha = ffecha + " Junio";
            break;
        case '07':
            ffecha = ffecha + " Julio";
            break;
        case '08':
            ffecha = ffecha + " Agosto";
            break;
        case '09':
            ffecha = ffecha + " Septiembre";
            break;
        case '10':
            ffecha = ffecha + " Octubre";
            break;
        case '11':
            ffecha = ffecha + " Noviembre";
            break;
        case '12':
            ffecha = ffecha + " Diciembre";
            break;
    }
    ffecha = ffecha + ' de '+sfecha[0];

    return ffecha;

}

/**
 * Funcion que permite seleccionar el icono segun la tarea o foro
 * @param {*} flag 
 */
function iconoEvento(flag) {
    var icono = "";
    if (flag == 0) {
        icono = "<i class='fas fa-file fa-2x'></i>";
    }else{
        if(flag == 1){
            icono = "<i class='fas fa-comment fa-2x'></i>";
        }
    }

    return icono;
}
/**
 * Funcion que parse la hora a un formato mas ligero
 * @param {*} hora 
 */
function parseHora(hora){
    var shora = hora.split("-");
    var thora = shora[2].split(" ");
    var xhora = thora[1];
    var yhora = xhora.split(".");
    var zhora = yhora[0].split(":");
    var fhora = zhora[0]+zhora[1];
    return fhora;
}