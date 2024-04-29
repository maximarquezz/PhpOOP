<?php
class Empleado extends Persona{

    //VARIABLES
    protected $sueldo;

    //CONSTRUCTORES
    public function __construct(String $nombre, String $apellido, int $edad, int $sueldo){
        parent::__construct($nombre, $apellido, $edad); // <- Lo mismo que super(); en Java. Lo malo es que en la zona de parámetros del constructor de esta subclase se deben igual escribir qué parámetros se necesitan.
        $this->sueldo = $sueldo;
    }

    //GETTERS
    public function getSueldo(){
        return $this->sueldo;
    }

    //SETTERS
    public function setSueldo(int $sueldo){
        $this->sueldo = $sueldo;
    }

}