<?php
/* ESTE PERTENECE AL LOGIN */
$conexion=mysqli_connect("localhost","root","","uni");
/* ESTE PERTENECE A LA SECCIÓN MI PERFIL DE INFORMACIÓN PERSONAL Y AL FORMULARIO DE DATOS PERSONALES */
$infoPersonal=mysqli_connect("localhost","root","","uni");
/* ESTE PERTENECE A LA SECCIÓN MI PERFIL DE INFORMACIÓN ACADÉMICA */
$infoAcademica=mysqli_connect("localhost","root","","uni");
/* ESTE PERTENECE A LA SECCIÓN PERIODO 2020-2 */
$perio2020_2=mysqli_connect("localhost","root","","uni");
/* ESTE PERTENECE A MI PRESENTACION */
$informacion=mysqli_connect("localhost","root","","uni");
if(!$conexion){
    echo "Connection failed!";
}
?>