<?php
//ext install phproberto.vscode-php-getters-setters 
class{
private $nombre;
private $apellido;
private $edad;

function __contruc($nombre,$apellido,$edad)
{
$this->nombre;
$this->apellido;
$this->edad;
}



/**
 * Get the value of nombre
 */ 
public function getNombre()
{
return $this->nombre;
}

/**
 * Set the value of nombre
 *
 * @return  self
 */ 
public function setNombre($nombre)
{
$this->nombre = $nombre;

return $this;
}

/**
 * Get the value of apellido
 */ 
public function getApellido()
{
return $this->apellido;
}

/**
 * Set the value of apellido
 *
 * @return  self
 */ 
public function setApellido($apellido)
{
$this->apellido = $apellido;

return $this;
}

/**
 * Get the value of edad
 */ 
public function getEdad()
{
return $this->edad;
}

/**
 * Set the value of edad
 *
 * @return  self
 */ 
public function setEdad($edad)
{
$this->edad = $edad;

return $this;
}
}