<!-- CIERRO SESIÓN Y ME REDIRIGE AL INDEX.PHP -->
<?php
session_start();
session_destroy();
header("location:../../index.php");
?>