<div class="asistencia-head">
    <h1>Control de asistencias</h1>
    <p>Por favor ingresa tu nombre y luego dale click a "Registrar asistencia"</p>
    <form class="asistencia-form" action="asistencia.php" method="POST">
        <input class="ingresarNombre" type="text" name="name" placeholder="Ingresa tu nombre">
        <input class="registrarAsistencia" type="submit" value="Registrar asistencia: Ingreso / Salida">
    </form>
</div>
<div class="table-asistencia">
    <table class="table table-bordered table-condensed table-hover table-striped">
        <thead class="head-asistencia">
            <tr>
                <th>N°</th>
                <th>Fecha</th>
                <th>Entrada</th>
                <th>Salida</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
            </tr>
        </tbody>
    </table>
</div>
<script src="../../../assets/js/asistencia.js"></script>