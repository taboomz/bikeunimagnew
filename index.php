

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	
	<link rel="stylesheet" href="./vista/css/bootstrap.min.css">
<!--	<link rel="stylesheet" href="/vista/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/vista/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="/vita/css/EstiloLogin.css">
-->
	<meta name="viewport" content="width=device-width, initial-scale=1" >
</head>

<body class="text-center">


<?php

session_start();


echo "<h1> Aqui debe mostar si carga  </h1>";
	if($_SESSION['ID_USUARIO']==null){
		header("Location: ./vista/login.php");
	}




?>
  
</body>
</html>
