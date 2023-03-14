<!DOCTYPE html>
<html lang="es">
<head>
    <title>INTRANET UNI</title>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- Nuestro css-->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- ESTILOS PARA CUANDO SE USE UNA TABLET-->
    <link rel="stylesheet" href="assets/css/indexmovil.css" media="screen and (max-width: 600px)">
</head>
<body>
    <main>
        <!-- Parte superior -->
        <div class="header-uni">
            <h2>UNIVERSIDAD NACIONAL DE INGENIERÍA</h2>
            <h2>FACULTAD DE INGENIERÍA MECÁNICA</h2>
        </div>
        <!-- Cajita contenedora de datos superior-->
        <div class="modal-dialog">
            <div class="modal-content">
                <figure>
                    <img src="assets/img/logouni.png" alt="logo de la uni">
                </figure>
                <h3>INTRANET EARPFIM</h3>
                <h5>Sistema de Planificación de Recursos Académicos y Empresariales</h5>
                <!-- FORMULARIO DE USARIO Y CONTRASEÑA -->
                <form action="app/modelo/validar.php" method="post">
                    <!-- PERMITE VER SI HAY UN ERROR MEDIANTE UN MENSAJE -->
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error'];?></p>
                    <?php } ?>
                    <div class="form-group" id="user-group">
                    <!-- onkeypress="return sololetras(event)" onpaste="return false" -->
                        <input type="text" class="form-control" id="user-group" placeholder="USUARIO" name="usuario" >
                    </div>
                    <div class="form-group" id="contraseña-group">
                        <input type="password" class="form-control" id="contraseña-group" placeholder="CONTRASEÑA" name="contraseña">
                    </div>
                    <button type="submit" class="btn btn-outline-primary mb-4" id="btn-login" disabled><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/index.js"></script>
</body>
</html>