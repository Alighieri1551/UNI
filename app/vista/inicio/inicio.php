
<div class="row">
    <div class="container-presentacion">
        <a href="#">Inicio</a><span> / Presentación</span>
    </div>
    <div class="presentation">
        <h3>MI PRESENTACIÓN</h3>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="cardresume">
                <div class="fotosUsuarios">
                    <?php
                        $usuarios = "SELECT * FROM presentacion WHERE codigo = '".$_SESSION['usuario']."'";
                        $usuarios = "dante";
                        $fotos = "../../../assets/img/";

                        if (file_exists($fotos . $usuarios . ".jpg")) {
                            echo '<img src="' . $fotos . $usuarios . '.jpg">';
                        } else {
                            echo '<img src="default_photo.jpg">';
                        }
                    ?>
                </div>
                <div class="tablaUsuarios">
                    <?php
                        include("../../modelo/db.php");
                        $pre = mysqli_query($informacion, "SELECT * FROM presentacion WHERE codigo = '".$_SESSION['usuario']."'");
                    ?>
                    <table class="table_items-content">
                        <?php 
                            while($presentacion = mysqli_fetch_array($pre)): 
                        ?>
                        <tbody>
                            <tr>
                                <td><i class='bx bxs-user'></i></td>
                                <td><strong>NOMBRE:</strong></td>
                                <td><?= $presentacion['nombre'] ?></td>
                            </tr>
                            <tr>
                                <td><i class='bx bxs-graduation'></i></td>
                                <td><strong>FUNCION:</strong></td>
                                <td><?= $presentacion['funcion'] ?></td>
                            </tr>
                            <tr>
                                <td><i class='bx bxs-circle'></i></td>
                                <td><strong>CÓDIGO:</strong></td>
                                <td><?= $presentacion['codigo'] ?></td>
                            </tr>
                            <tr>
                                <td><i class='bx bxs-school'></i></td>
                                <td><strong>FACULTAD:</strong></td>
                                <td><?= $presentacion['facultad'] ?></td>
                            </tr>
                            <tr>
                                <td><i class='bx bxs-school'></i></td>
                                <td><strong>ESCUELA:</strong></td>
                                <td><?= $presentacion['escuela'] ?></td>
                            </tr>
                            <tr>
                                <td><i class='bx bxs-school'></i></td>
                                <td><strong>ESPECIALIDAD:</strong></td>
                                <td><?= $presentacion['especialidad'] ?></td>
                            </tr>
                            <tr>
                                <td><i class='bx bxs-calendar'></i></td>
                                <td><strong>PERIODO ACADÉMICO:</strong></td>
                                <td><?= $presentacion['periodoAcademico'] ?></td>
                            </tr>
                        </tbody>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="cardinfo">
                <div class="cardinfo-header">
                    <i class='bx bxs-user-circle'></i>
                    <h5><u>Información Personal Académica</u></h5>
                </div>
                <div class="cardinfo-contenido">
                    <h6>Datos Registrados en la Base de Datos</h6>
                    <ul>
                        <li>Nombre, Fecha y Lugar de Nacimiento, Estado Civil, Sexo</li>
                        <li>Domicilio, Teléfono y Correo Electrónico</li>
                        <li>Facultad, Programa Académico, Especialidad</li>
                        <li>Plan de Estudios, Año y Modalidad de Ingreso</li>
                        <li>Situación Académica y Año de Permanencia</li>
                        <li>Promedio Ponderado, Número de Periodos Matriculados</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="cardinfo">
                <div class="cardinfo-header">
                    <i class='bx bx-bar-chart-square'></i>
                    <h5><u>Historial Académico y Calificaciones</u></h5>
                </div>
                <div class="cardinfo-contenido">
                    <h6>Matrículas Registradas y Resumen de Creditaje Aprobado</h6>
                    <ul>
                        <li>Periodos Académicos Matriculados, Plan de Estudios</li>
                        <li>Ciclo, Materia, Creditaje, Tipo Asignatura</li>
                        <li>Nota, Sección, Tipo, Nivel</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
        include('inicio2.php')
    ?>
</div>