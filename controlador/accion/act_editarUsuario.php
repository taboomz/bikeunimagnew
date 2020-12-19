<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    $id = $_POST['id'];
    $nroCedula = $_POST['nroCedula'];
    $nombres = $_POST['nombres'];
    $apellidos= $_POST['apellidos'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $imagen = $_POST['imagen'];
    $rol = $_POST['rol'];
    
    $usuario = new Usuario($id,$nroCedula, $nombres,$apellidos, $correo, $password,$direccion, $telefono, $imagen,$rol);
    editarUsuario($usuario);
//Modificar el administrador de edicion desde el perfil del usuario
    header("Location: ../../vista/perfil.php");
