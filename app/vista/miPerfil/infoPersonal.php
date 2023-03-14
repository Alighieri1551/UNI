<body>
    <div class="col-lg-8 col-md-12 col-xs-12">
        <div class="card-academic">
            <section class="accordion">
                <section class="accordion-tabs">
                    <button type="submit" class="accordion-tab accordion-active" id="buttonIP" data-actab-group="0"
                        data-actab-id="0">INFORMACIÓN PERSONAL</button>
                    <button type="submit" class="accordion-tab" id="buttonIA" data-actab-group="0"
                        data-actab-id="1">INFORMACIÓN ACADÉMICA</button>
                </section>
                <section class="accordion-content">
                    <article class="accordion-item accordion-active" data-actab-group="0" data-actab-id="0">
                        <div class="accordion-item__container row" id="ip-content">
                            <table class="table" style="font-size: 15px" id="adm">
                                <?php
                                    include("../../modelo/db.php");
                                    $data = mysqli_query($infoPersonal, "SELECT * FROM infopersonal WHERE codigo = '".$_SESSION['usuario']."'");
                                    /* $infoPersonal = mysqli_fetch_array($sql);*/
                                    while ($consulta = mysqli_fetch_array($data)){
                                        $consulta['dni'].','.$consulta['estadoCivil'].','.$consulta['sexo'].','.$consulta['fecha_nacimiento'].','.$consulta['lugar_nacimiento'].','.$consulta['telefono'].','.$consulta['celular'].','.$consulta['correo_institucional'].','.$consulta['correo_personal'].','.$consulta['domicilio'].','.$consulta['direccion'];
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-credit-card"></i></td>
                                        <td><strong>DNI</strong></td>
                                        <td><?php echo $consulta['dni'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-legal"></i></td>
                                        <td><strong>ESTADO CIVIL</strong></td>
                                        <td><?php echo $consulta['estadoCivil'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fas fa-restroom"></i></td>
                                        <td><strong>SEXO</strong></td>
                                        <td><?php echo $consulta['sexo'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-calendar"></i></td>
                                        <td><strong>FECHA DE NACIMIENTO</strong></td>
                                        <td><?php echo $consulta['fecha_nacimiento'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-map-marker"></i></td>
                                        <td><strong>LUGAR DE NACIMIENTO</strong></td>
                                        <td><?php echo $consulta['lugar_nacimiento'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-phone"></i></td>
                                        <td><strong>TELÉFONO</strong></td>
                                        <td><?php echo $consulta['telefono'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-mobile-phone"></i></td>
                                        <td><strong>CELULAR</strong></td>
                                        <td><?php echo $consulta['celular'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-envelope"></i></td>
                                        <td><strong>CORREO INSTITUCIONAL</strong></td>
                                        <td><?php echo $consulta['correo_institucional'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-envelope"></i></td>
                                        <td><strong>CORREO PERSONAL</strong></td>
                                        <td><?php echo $consulta['correo_personal'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-map-marker"></i></td>
                                        <td><strong>DOMICILIO</strong></td>
                                        <td><?php echo $consulta['domicilio'];?></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><i class="fa fa-map-marker"></i></td>
                                        <td><strong>DIRECCIÓN</strong></td>
                                        <td><?php echo $consulta['direccion'];?></td>
                                    </tr>
                                </tbody>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </article>
                    <?php
                        include("infoAcademica.php");
                    ?>
                </section>
            </section>
        </div>
    </div>
    <!-- MODAL DE MODIFICAR DATOS INFORMACIÓN PERSONAL-->
    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR DATOS PERSONALES</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- MUESTRA LOS DATOS DE INFORMACIÓN PERSONAL EN LA MODAL-->
                    <form id="for_adm">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">DNI</label>
                            <input type="tel" class="form-control" id="dni_" name="dni_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">ESTADO CIVIL</label>
                            <input type="text" class="form-control" id="estadoCivil_" name="estadoCivil_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">SEXO</label>
                            <input type="text" class="form-control" id="sexo_" name="sexo_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">FECHA DE NACIMIENTO</label>
                            <input type="date" class="form-control" id="fecha_nacimiento_" name="fecha_nacimiento_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">LUGAR DE NACIMIENTO</label>
                            <input type="text" class="form-control" id="lugar_nacimiento_" name="lugar_nacimiento_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">TELÉFONO</label>
                            <input type="tel" class="form-control" id="telefono_" name="telefono_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">CELULAR</label>
                            <input type="tel" class="form-control" id="celular_" name="celular_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">CORREO INSTITUCIONAL</label>
                            <input type="email" class="form-control" id="correo_institucional_" name="correo_institucional_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">CORREO PERSONAL</label>
                            <input type="email" class="form-control" id="correo_personal_" name="correo_personal_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">DOMICILIO</label>
                            <input type="text" class="form-control" id="domicilio_" name="domicilio_">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">DIRECCIÓN</label>
                            <input type="text" class="form-control" id="direccion_" name="direccion_">
                        </div>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="modificar_adm">Modificar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<div class="botondemodificar">
    <button type="button" data-bs-toggle="modal" data-bs-target="#editar" class="btn btn-success" onclick="modificar(' <?php echo $arreglo ?> ')">MODIFICAR</button>
</div>

<script type="text/javascript" src="../../../assets/js/funcionIP.js"></script>
<script type="text/javascript" src="../../../assets/js/infoPA.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>