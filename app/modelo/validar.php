<?php
include "db.php";
/* VALIDAR USARIO Y CONTRASEÑA */
if(isset($_POST['usuario']) && isset($_POST['contraseña'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    /* DECLARO MIS VARIABLES PARA USUARIO Y CONTRASEÑA- ENVIAR(POST) */
    $user = validate($_POST['usuario']);
    $contra = validate($_POST['contraseña']);
    session_start();
    $_SESSION['usuario']=$user;
    /* USUARIO REQUERIDO */
    if (empty($user)) {
        header("Location: ../../index.php?error=Usuario Requerido");
        exit();
    /* CONTRASEÑA REQUERIDA */
    }elseif (empty($contra)) {
        header("Location: ../../index.php?error=Contraseña Requerida");
        exit();
    }else{
        /* HAGO MI CONSULTA A LA BASE DE DATOS SELECCIONANDDO LA TABLA ID */
        $consulta="SELECT*FROM usuarios where usuario='$user' and contraseña='$contra'";
        /* RESULTADO CONTIENE A $CONEXION Y $CONSULTA */
        $resultado=mysqli_query($conexion,$consulta);
        /* FILAS CONTIENE A $RESULTADO */
        $filas=mysqli_num_rows($resultado);
        /* INGRESO AL CONTENIDO */
        if($filas){
            header("Location:../vista/recursos/home.php");
        }else{
            /* USUARIO O CONTRASEÑA INCORRECTA */
            header("Location:../../index.php?error=Usario o contraseña incorrecta");
            exit();
            ?>
            <?php
            /* DEVUELVE AL INDEX */
            include("../../index.php");
        }
    }
}else{
    header("Location: ../../index.php");
    exit();
}