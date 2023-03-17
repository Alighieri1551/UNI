<div class="row">
    <div class="container-presentacion" style="background: #f5f5f5;">
        <a href="#">Mi información</a><span> / Historial académico de calificaciones</span>
    </div>
    <div class="presentation">
        <h3>HISTORIAL ACADÉMICO DE CALIFICACIONES</h3>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="card-historial">
                <div class="cardinfo-header">
                    <i class='bx bx-bar-chart-square'></i>
                    <h5><u>Historial Académico y Calificaciones</u></h5>
                </div>
                <?php
                    include("../../modelo/db.php");
                    $pre = mysqli_query($informacion, "SELECT * FROM presentacion WHERE codigo = '".$_SESSION['usuario']."'");
                ?>
                <table class="table-historial">
                    <?php 
                        while($presentacion = mysqli_fetch_array($pre)): 
                    ?>
                    <tbody>
                        <tr>
                            <td class="text-left"><strong>Código</strong></td>
                            <td class="text-center"><strong>:</strong></td>
                            <td><?= $presentacion['codigo'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Apellidos y nombres</strong></td>
                            <td class="text-center"><strong>:</strong></td>
                            <td><?= $presentacion['nombre'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Facultad</strong></td>
                            <td class="text-center"><strong>:</strong></td>
                            <td><?= $presentacion['facultad'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Escuela</strong></td>
                            <td class="text-center"><strong>:</strong></td>
                            <td><?= $presentacion['escuela'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Especialidad</strong></td>
                            <td class="text-center"><strong>:</strong></td>
                            <td><?= $presentacion['especialidad'] ?></td>
                        </tr>
                        <tr>
                            <td class="text-left"><strong>Periodo académico</strong></td>
                            <td class="text-center"><strong>:</strong></td>
                            <td><?= $presentacion['periodoAcademico'] ?></td>
                        </tr>
                    </tbody>
                    <?php endwhile; ?>
                </table>

            </div>
        </div>
    </div>
</div>
<?php
    include('historialAcademico1.php')
?>