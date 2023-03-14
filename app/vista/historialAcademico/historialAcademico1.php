<div class="row container">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel-headingNotas">
            <h3>Historial Académico de Calificaciones</h3>
        </div>
        <?php
            include("../../modelo/db.php");
            $sqlm = "SELECT * FROM semestre WHERE codigo = '".$_SESSION['usuario']."'";
            $sqlm = mysqli_query($perio2020_2, $sqlm);
            while($semestres = mysqli_fetch_assoc($sqlm)){
        ?>
        <div class="col-12 mb-5">
            <button class="btn btn-info"><?php echo $semestres['semestre'];?></button>
            <table class="table table-bordered table-condensed table-hover table-striped">
                <thead>
                    <tr class="info-historial">
                        <th class="text-center">Plan</th>
                        <th class="text-center">Salón</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Crédito</th>
                        <th class="text-center">Materia</th>
                        <th class="text-center">Nota</th>
                        <th class="text-center">Sección</th>
                        <th class="text-center">Nivel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql_semestre = "SELECT * FROM historialacademi WHERE semestre = '". $semestres['semestre']."'";
                        $sql_semestre = mysqli_query($perio2020_2, $sql_semestre);
                        while($historialacademico = mysqli_fetch_assoc($sql_semestre)){
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $historialacademico['Plan'];?></td>
                        <td class="text-center"><?php echo $historialacademico['Salón'];?></td>
                        <td class="text-center"><?php echo $historialacademico['Tipo'];?></td>
                        <td class="text-center"><?php echo $historialacademico['Crédito'];?></td>
                        <td class="text-center"><?php echo $historialacademico['Materia'];?></td>
                        <td class="text-center"><?php echo $historialacademico['Nota'];?></td>
                        <td class="text-center"><?php echo $historialacademico['Sección'];?></td>
                        <td class="text-center"><?php echo $historialacademico['Nivel'];?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
        }
        ?>
        <div class="panel-footerNotas">
            <h6><strong>TIPO DE ASIGNATURA: </strong>O=Obligatorio, E=Electivo</h6>
        </div>
    </div>
</div>