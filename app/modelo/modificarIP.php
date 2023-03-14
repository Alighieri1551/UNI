<?php

include("db.php");

$dni = $_POST['dni_'];
$estadoCivil = $_POST['estadoCivil_'];
$sexo = $_POST['sexo_'];
$fecha_nacimiento = $_POST['fecha_nacimiento_'];
$lugar_nacimiento = $_POST['lugar_nacimiento_'];
$telefono = $_POST['telefono_'];
$celular = $_POST['celular_'];
$correo_institucional = $_POST['correo_institucional_'];
$correo_personal = $_POST['correo_personal_'];
$domicilio = $_POST['domicilio_'];
$direccion = $_POST['direccion_'];
$id = $_POST['id_'];

    $cambiar = "UPDATE infopersonal SET dni = '$dni',
    estadoCivil = '$estadoCivil',
    sexo = '$sexo',
    fecha_nacimiento = '$fecha_nacimiento',
    lugar_nacimiento = '$lugar_nacimiento',
    telefono = '$telefono',
    celular = '$celular',
    correo_institucional = '$correo_institucional',
    correo_personal = '$correo_personal',
    domicilio = '$domicilio',
    direccion = '$direccion' WHERE id = $id";

    $nuevoresultado = mysqli_query($infoPersonal, $cambiar);

    mysqli_close($infoPersonal);

?>