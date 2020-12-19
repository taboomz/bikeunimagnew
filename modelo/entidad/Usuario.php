<?php

//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class Usuario
{
    public $id;
    public $nroCedula;
    public $nombres;
    public $apellidos;
    public $correo;
    public $password;
    public $direccion;
    public $telefono;
    public $imagen;
    public $rol;

    
    public function __construct($id, $nroCedula, $nombres, $apellidos, $correo, $password, $direccion,$telefono,$imagen,$rol){

        $this->id = $id;
        $this->nroCedula = $nroCedula;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
		$this->correo = $correo;
		$this->password = $password;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->imagen = $imagen;
        $this->rol = $rol;
    }
    
    public function getId(){
        return $this->id;
    }

    public function getNroCedula(){
        return $this->nroCedula;
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getCorreo()
    {
        return $this->correo;
    }
    
     public function getPassword()
    {
        return $this->password;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

	 public function getTelefono()
    {
        return $this->telefono;
    }

    public function getImagen(){
        return $this->imagen;
    }

    public function getRol(){
       return $this->rol;
    }


}