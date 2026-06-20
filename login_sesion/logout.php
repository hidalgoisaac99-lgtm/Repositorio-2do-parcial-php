<?php
/*cerrar sesion: destruir la sesión y redirigir al login
SERVIDOR -> destruir session.php -> ID*/
session_start();

//destruir la sesión
session_destroy();
header("Location: login.php?mensaje=" .
 urlencode("Sesión cerrada correctamente"));
exit;
?>