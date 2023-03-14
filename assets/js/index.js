// ESTA FUNCIÓN ME PERMITE HABILITAR EL BOTÓN DE ENVIAR CUANDO TODOS LOS CAMPOS ESTÉN LLENOS
function habilitado(){
    nombre = document.getElementById("user-group").value;
    correo = document.getElementById("contraseña-group").value;
    val = 0;

    if(nombre == ""){
        val++;
    }

    if(correo == ""){
        val++;
    }

    if(val == 0){
        document.getElementById("btn-login").disabled = false;
    } else{
        document.getElementById("btn-login").disabled = true;
    }
}
document.getElementById("user-group").addEventListener("keyup", habilitado);
document.getElementById("contraseña-group").addEventListener("keyup", habilitado);
document.getElementById("btn-login").addEventListener("click", () => {});


// // ESTA FUNCIÓN ME PERMITE VALIDAR SOLO LETRAS Y NO PERMITE INGRESAR NI COPIAR NÚMEROS
// function sololetras(e){
//     key = e.keyCode || e.which;
//     teclado = String.fromCharCode(key).toLowerCase();
//     letras = " abcdefghijklmnñopqrstuvwxyz";
//     especiales = "8-37-38-46-164";
//     teclado_especial = false;

//     for(var i in especiales){
//         if(key==especiales[i]){
//             teclado_especial = true; break;
//         }
//     }

//     if(letras.indexOf(teclado)==-1 && !teclado_especial){
//         return false;
//     }
// }