/* MEDIANTE ESTA FUNCIÓN LLENO TODOS LOS CAMPOS DEL FORMULARIO AUTOMÁTICAMENTE TRAIDO DE MI BASE DE DATOS */
function modificar(arreglo){
    /* SPLIT SIRVE PARA QUITAR LAS COMAS */
    cadena = arreglo.split(',');

    $("#dni_").val(cadena[0]);
    $("#estadoCivil_").val(cadena[1]);
    $("#sexo_").val(cadena[2]);
    $("#fecha_nacimiento_").val(cadena[3]);
    $("#lugar_nacimiento_").val(cadena[4]);
    $("#telefono_").val(cadena[5]);
    $("#celular_").val(cadena[6]);
    $("#correo_institucional_").val(cadena[7]);
    $("#correo_personal_").val(cadena[8]);
    $("#domicilio_").val(cadena[9]);
    $("#direccion_").val(cadena[10]);
}

$('#modificar_adm').click(function() {
    var recolec = $('#for_adm').serialize();
    alert(recolec);

    $.ajax({
        url: '../perfil/modificarIP.php',
        type: 'POST',
        data: recolec,

        success:function(){
            $('#adm').load('../perfil/infoPersonal.php #adm');
            alert("exitoso");
            $('body').removeClass('modal-open');
            $('.modal-backdrop').hide();
        }

    })
});