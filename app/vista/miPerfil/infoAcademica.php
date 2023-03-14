<article class="accordion-item accordion-active" data-actab-group="0" data-actab-id="1">
    <div class="accordion-item__containeritem row d-none" id="ia-content">
        <table class="table" style="font-size: 15px">
            <?php
                include("../../modelo/db.php");
                $data = mysqli_query($infoAcademica, "SELECT * FROM infoacademico WHERE codigo = '".$_SESSION['usuario']."'");
                while ($datosIA = mysqli_fetch_array($data)){
                    $datosIA['año_ingreso'].','.$datosIA['modalidad_ingreso'].','.$datosIA['colegio_procedencia'].','.$datosIA['ciclo_actual'].','.$datosIA['promedio_ponderado'].','.$datosIA['situacion_academica'].','.$datosIA['estado_permanencia'].','.$datosIA['ultima_matricula'].','.$datosIA['promedio_ultima_matricula'];
            ?>
            <tbody>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>AÑO DE INGRESO</strong></td>
                    <td><?php echo $datosIA['año_ingreso'];?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>MODALIDAD DE INGRESO</strong></td>
                    <td><?php echo $datosIA['modalidad_ingreso'];?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>COLEGIO DE PROCEDENCIA</strong></td>
                    <td><?php echo $datosIA['colegio_procedencia'];?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>AÑO / CICLO DE ESTUDIO</strong></td>
                    <td><?php echo $datosIA['ciclo_actual'];?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>PROMEDIO PONDERADO</strong></td>
                    <td><?php echo $datosIA['promedio_ponderado'];?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>SITUACIÓN ACADÉMICA</strong></td>
                    <td><?php echo $datosIA['situacion_academica'];?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>ESTADO DE PERMANENCIA</strong></td>
                    <td><?php echo $datosIA['estado_permanencia'];?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>ÚLTIMA MATRÍCULA</strong></td>
                    <td><?php echo $datosIA['ultima_matricula'];?></td>
                </tr>
                <tr>
                    <td class="text-center"><i class="fa fa-tags"></i></td>
                    <td><strong>PROMEDIO DE ÚLTIMA MATRÍCULA</strong></td>
                    <td><?php echo $datosIA['promedio_ultima_matricula'];?></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</article>