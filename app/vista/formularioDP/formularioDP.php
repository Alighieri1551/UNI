<?php
    include("../../modelo/db.php");
    $data = mysqli_query($infoPersonal, "SELECT * FROM infopersonal WHERE codigo = '".$_SESSION['usuario']."'");
    $infoPersonal = mysqli_fetch_array($data);
?>
<div class="card-formulariodp">
    <div class="head-formulariodp">
        <h3>FORMULARIO DE DATOS PERSONALES</h3>
    </div><br>
    <div class="panel-bodyformdp">
        <fieldset class="formdp">
            <legend class="formdp-legend">Datos personales</legend>
            <form>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Código de estudiante</label>
                    <div class="col-lg-4">
                        <input type="number" class="form-control" value="<?php echo $infoPersonal['codEstu']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Nombre del estudiante</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['nomEstu']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label" >DNI</label>
                    <div class="col-lg-4">
                        <input type="number" class="form-control" value="<?php echo $infoPersonal['dni']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Fecha de Nacimiento</label>
                    <div class="col-lg-4">
                        <input type="date" class="form-control" value="<?php echo $infoPersonal['fecha_nacimiento']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Sexo</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['sexo']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Estado Civil</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['estadoCivil']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Lugar de Nacimiento</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['lugar_nacimiento']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Dirección</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['direccion']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Teléfono</label>
                    <div class="col-lg-4">
                        <input type="tel" class="form-control" value="<?php echo $infoPersonal['telefono']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Celular</label>
                    <div class="col-lg-4">
                        <input type="tel" class="form-control" value="<?php echo $infoPersonal['celular']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Correo Personal</label>
                    <div class="col-lg-4">
                        <input type="email" class="form-control" value="<?php echo $infoPersonal['correo_personal']?>" disabled>
                    </div>
                </div><br>
            </form><br>
            <legend class="formdp-legend">Colegio de Procedencia</legend>
            <form>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Nombre del colegio</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['nomCole']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Tipo de colegio</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['tipoCole']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Ubicación del colegio</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['ubiCole']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Año de conclusión de secundaria</label>
                    <div class="col-lg-4">
                        <input type="tel" class="form-control" value="<?php echo $infoPersonal['coleFin']?>" disabled>
                    </div>
                </div><br>
            </form><br>
            <legend class="formdp-legend">Dependencia Económica</legend>
            <form>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">¿Depende económicamente de sus padres?</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['depenEco']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Número de hijos</label>
                    <div class="col-lg-4">
                        <input type="tel" class="form-control" value="<?php echo $infoPersonal['hijos']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">¿Trabaja actualmente?</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['trabajaA']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">¿Dónde trabaja?</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['dTrabaja']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">¿Con quién o quiénes vive?</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['vive']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Tipo de vivienda</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['tipoVive']?>" disabled>
                    </div>
                </div><br>
            </form><br>
            <legend class="formdp-legend">¿Con qué recursos cuenta para realizar sus estudios?</legend>
            <form>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Transporte</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['trans']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Acceso a Internet</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['inter']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Acceso a bibliotecas</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['biblio']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">¿Pertenece a algún programa de becas? ¿Cuál?</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['becas']?>" disabled>
                    </div>
                </div><br>
            </form>
            <legend class="formdp-legend">Salud</legend>
            <form>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">¿Sufre de alguna discapacidad física? ¿Cuál?</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['disca']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">¿A qué seguro de salud se encuentra incorporado?</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['segSalud']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">¿Qué tipo de grupo sanguíneo presenta?</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['grupoSan']?>" disabled>
                    </div>
                </div><br>
            </form><br>
            <legend class="formdp-legend">En caso de emergencia, comunicarse con...</legend>
            <form>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Nombres y apellidos</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['nomEmer']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Dirección</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" value="<?php echo $infoPersonal['direcEmer']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Teléfono</label>
                    <div class="col-lg-4">
                        <input type="tel" class="form-control" value="<?php echo $infoPersonal['teleEmer']?>" disabled>
                    </div>
                    <label for="nomEstudiante" class="col-lg-2 contro-label">Celular</label>
                    <div class="col-lg-4">
                        <input type="tel" class="form-control" value="<?php echo $infoPersonal['celuEmer']?>" disabled>
                    </div>
                </div><br>
                <div class="row">
                    <label for="recipient-name" class="col-lg-2 contro-label">Correo personal</label>
                    <div class="col-lg-4">
                        <input type="email" class="form-control" value="<?php echo $infoPersonal['correoEmer']?>" disabled>
                    </div>
                </div><br>
            </form>
        </fieldset>
    </div>
</div>