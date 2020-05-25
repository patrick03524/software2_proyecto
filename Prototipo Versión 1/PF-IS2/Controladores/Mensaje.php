<?php
session_start();
$id=$_SESSION['id'];
require_once("../Modelos/mensaje.php");
$mensaje=new mensaje();
$datos=$mensaje->BuscarMensajes($id);
require_once("../Vistas/IHome.php");
unset($_SESSION['user']);
?>