<?php 
 
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
-->
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/estilotabata.css">
  <link rel="stylesheet" href="../css/style.css">	
  

<!--  <script src="../js/jquery-3.5.1.min.js"></script>
--> <script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/administradorUsuarios.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/sweetalert2.js"></script>

    
    <title>Crud Cliente</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarNav">
			<ul class="navbar-nav">
				
				<li class="nav-item active">
					<a class="nav-link" href="administradorUsuarios.php">Usuarios</a>
				</li>
				
			</ul>
		</div>

		<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown">
			<a id="nombreUsuario" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<?php if (isset($_SESSION['ID_USUARIO'])) 
							echo $_SESSION['NOMBRE_USUARIO']; 
						?>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<!--<img id="imagenPerfil" src="img/cerrarsesion.jpg" alt="" width="50px"> -->
				<div class="dropdown-divider"></div>
				<a id="cerrarSesion" class="dropdown-item" href="../controlador/accion/act_logout.php">Cerrar sesion</a>
			</div>
		</li>
        </ul>
    </div>
    </nav>
    
     <!-- Button llamada a  modal -->
<div class="container-fluid">
<div class="justify-content-center row">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCrearUsuario">
    Crear usuario
    </button>
</div>   
</div>

<div class="container-fluid">
<div class="justify-content-center row table-responsive">
<table class="table table-striped" id="usuariosRegistrados">
  <thead>
    <tr>
      <th scope="col"> Numero Documento </th>
      <th scope="col">Nombres</th>
      <th scope="col"> Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col"> Direccion </th>
      <th scope="col">Telefono</th>
      <th scope="col">Imagen</th>
      <th scope="col">Rol</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
        
  </tbody>
</table>
</div>   
</div>
    
<!-- Modal Crear Usuario -->
<div class="modal fade" id="modalCrearUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../../controlador/accion/act_registrarUsuario.php" method="post">
      <div class="modal-body">
            <div class="container-fluid">

                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Numero Documento" type="text" class="form-control" name="nroCedula"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Nombres" type="text" class="form-control" name="nombres"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Apellidos" type="text" class="form-control" name="apellidos"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Correo" type="email" class="form-control" name="correo"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Contraseña" type="password" class="form-control" name="password"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Direccion" type="text" class="form-control" name="direccion"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Telefono" type="text" class="form-control" name="telefono"></div>
                </div>
                
                
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="ruta imagen" type="text" class="form-control" name="imagen"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                
                <div class="col-md-8">
                <select class="form-control" name="rol">
                    <option>Elegir rol</option>
                    <option value="1">Administrador</option>
                    <option value="0">Usuario</option>
                </select>
                </div>

                </div>
                <div class="justify-content-center row">
                    <button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
       

      </div>
     
      </form>
    </div>
  </div>
</div>
<!-- end modal -->


<!-- Modal Editar -->
<div class="modal fade" id="modalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEditarLabel">Editar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="../controlador/accion/act_editarUsuario.php" method="post">
      <div class="modal-body">
            <div class="container-fluid">
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Nombre" type="text" class="form-control" name="nombre"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Correo" type="email" class="form-control" name="correo"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Contraseña" type="password" class="form-control" name="password"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Telefono" type="text" class="form-control" name="telefono"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Fecha de nacimiento" type="date" class="form-control" name="fechanac"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="sexo col-md-8">
                <select class="form-control" name="sexo">
                    <option>Género</option>
                    <option>F</option>
                    <option>M</option>
                </select>
                </div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                <div class="col-md-8"><input placeholder="Peso en KG" type="text" class="form-control" name="peso"></div>
                </div>
                <div style="padding:7px 0;" class="justify-content-center row">
                
                <div class="rol col-md-8">
                <select class=" form-control" name="administrador">
                    <option>Elegir rol</option>
                    <option value="1">Administrador</option>
                    <option value="0">Usuario</option>
                </select>
                </div>

                </div>
                <input hidden type="number" class="form-control" name="idUsuario">
                <div class="justify-content-center row">
                    <button type="button" class="mr-4 btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
       

      </div>
     
      </form>
    </div>
  </div>
</div>
<!-- end modal -->


<script src="../js/administradorUsuarios.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/sweetalert2.js"></script>

</body>
</html>