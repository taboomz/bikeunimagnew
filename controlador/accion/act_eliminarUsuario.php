<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    $id = $_GET['id'];
    
    eliminarUsuario($id);

    header("Location: ../../vista/admin/admin.php");
    