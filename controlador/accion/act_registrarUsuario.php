<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");
       
        $nroCedula = $_POST['nroCedula'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        //$imagen = $_POST['imagen'];
     
        $Fecha = new DateTime();
        $nombreArchivo= ($imagen!="")?$Fecha->getTimestamp()."_".$_FILES["imagen"]["name"] :"imagen.jpg";

        $tmpFoto= $_FILES["imagen"]["tmp_name"];

        if($tmpFoto!=""){
            move_uploaded_file($tmpFoto,"../vista/img/".$nombreArchivo);
        }

        $imagen = $_FILES['imagen']["name"];
        $rol = $_POST['rol'];



        if(isset($_POST['rol'])) {
            $usuario = new Usuario(NULL, $nroCedula, $nombres, $apellidos, $correo, $password, $direccion, $telefono,$imagen, $rol);   
            registrarUsuario($usuario);
            header("Location: ../../vista/admin/admin.php");
        }else{
            $usuario = new Usuario(NULL, $nroCedula, $nombres, $apellidos, $correo, $password, $direccion, $telefono,$imagen, "Usu");
            registrarUsuario($usuario);
            header("Location: ../../vista/login.php");
        }
 


        
        

