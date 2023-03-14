<?php
class Controlador{
    function plantilla(){
    /* ME REDIRIGE A INICIO CUANDO EN LA URL NO HAY CONTENIDO*/
    if(!isset($_GET['contenido']) && empty($_GET['contenido'])) return include("../vista/inicio/inicio.php");

    $contenedor=$_GET['contenido'];
    
    /* SECCIÓN INICIO */
    $Arr_inicio=['inicio'];
    if(in_array($_GET['contenido'],$Arr_inicio)) return include("../inicio/$contenedor.php");
    
    /* SECCIÓN MI PERFIL */
    $Arr_perfil=['miPerfil','infoAcademica','infoPersonal'];
    if(in_array($_GET['contenido'],$Arr_perfil)) return include("../miPerfil/$contenedor.php");
    
    /* SECCIÓN HISTORIAL ACADÉMICO */
    $Arr_historial=['historialAcademico'];
    if(in_array($_GET['contenido'],$Arr_historial)) return include("../historialAcademico/$contenedor.php");

    /* SECCIÓN FORMULARIO */
    $Arr_formulario=['formularioDP'];
    if(in_array($_GET['contenido'],$Arr_formulario)) return include("../formularioDP/$contenedor.php");

    /* SECCIÓN DE ASISTENCIAS */
    $Arr_asistencia=['asistencia'];
    if(in_array($_GET['contenido'],$Arr_asistencia)) return include("../asistencia/$contenedor.php");
    }
}