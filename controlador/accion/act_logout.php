<?php
//Se reanuda la sesión existente
session_start();

//Luego se destruye esa sesion
session_destroy();

//Y se envía a la vista del login
echo "<script>alert('Esperamos que vuelvas pronto');</script>";
header("Location: ../../vista/login.php");