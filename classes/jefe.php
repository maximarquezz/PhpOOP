<?php
class Jefe extends Empleado{

    //VARIABLES
    protected $aumento;

    //CONSTRUCTORES
    public function __construct(String $nombre, String $apellido, int $edad, int $sueldo, int $aumento){
        parent::__construct($nombre, $apellido, $edad, ($sueldo + $aumento));
    }

    //GETTERS
    public function getAumento(){
        return $this->aumento;
    }

    //SETTERS
    public function setAumento($aumento){
        $this->sueldo += $aumento;
    }

    //*OVERRIDE
    public function setSueldo(int $sueldo){
        $this->sueldo = $sueldo;
        $this->sueldo += $this->aumento;
    }
}