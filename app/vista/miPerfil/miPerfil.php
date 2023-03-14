<div class="row">
    <div class="container-presentacion" style="background: #f5f5f5;">
        <a href="">Mi información</a><span> / Mi Perfil</span>
    </div>
    <div class="presentation">
        <h3>MI PERFIL</h3>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="card-perfil">
                <button><i class='bx bxs-file-pdf'></i> DESCARGAR PERFIL</button>
                <table class="table_items-content">
                    <?php
                        include("../../modelo/db.php");
                        $pre = mysqli_query($informacion, "SELECT * FROM presentacion WHERE codigo = ".$_SESSION['usuario']);
                        while($presentacion = mysqli_fetch_array($pre)){
                            $mipre = $presentacion['facultad'].','.$presentacion['escuela'].','.$presentacion['especialidad'].','.$presentacion['planEstudio'];
                    ?>
                    <tbody>
                        <tr>
                            <td><i class='bx bxs-school'></i></td>
                            <td><strong>FACULTAD:</strong></td>
                            <td><?php echo $presentacion['facultad'];?></td>
                        </tr>
                        <tr>
                            <td><i class='bx bxs-school'></i></td>
                            <td><strong>ESCUELA:</strong></td>
                            <td><?php echo $presentacion['escuela'];?></td>
                        </tr>
                        <tr>
                            <td><i class='bx bxs-school'></i></td>
                            <td><strong>ESPECIALIDAD:</strong></td>
                            <td><?php echo $presentacion['especialidad'];?></td>
                        </tr>
                        <tr>
                            <td><i class='bx bxs-calendar'></i></td>
                            <td><strong>PERIODO ACADÉMICO:</strong></td>
                            <td><?php echo $presentacion['planEstudio'];?></td>
                        </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
        <?php
            include('infoPersonal.php')
        ?>
    </div>
</div>
<script src="../../../assets/js/infoPA.js"></script>
<script src="../../../assets/js/funcionIP.js"></script>