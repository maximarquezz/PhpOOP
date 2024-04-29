<?php
abstract class Persona{

    //VARIABLES
    protected $nombre, $apellido, $edad;

    //CONSTRUCTORES
    public function __construct(String $nombre, String $apellido, int $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    //GETTERS
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this->edad;
    }

    //SETTERS
    public function setNombre(String $nombre){
       $this->nombre = ucfirst($nombre); //"$this -> $nombre = nombre;" es lo mismo que "this.nombre = nombre;" en JAVA
    }

    public function setApellido(String $apellido){
        $this->apellido = ucfirst($apellido);
    }

    public function setEdad(int $edad){
        $this->edad = $edad;
    }

}