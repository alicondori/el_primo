<?php
include("db.php");
/* 
esto es para hacer la sucia consiste lipiar la tabla informacion cuando le da en salir ya que ahi es donde se guardan lo inicios de sesion para saber si es administrador o usuario, eso tambien sirve para otorgar acceso segun tipo de usuario  */

$query = "delete from informacion where idinformacion != 'null'";
$result = mysqli_query($conn,$query);
if (!$result) {
    die("query failed");
}
$_SESSION['message']='session cerrada exitosamente';
$_SESSION['message_type']='success';
header("Location: index.php");
?>