<?php 

class Alumno 
{   
	private $_id;
    private $_nombreP;
    private $_apellidosP;
	private $_cp;
	private $_ciudad;
	private $_calle;

    //constructor parametrizado
    /*
    public function __construct(Alumno $alumno)
    {
        $this->_id = $alumno->getID();
        $this->_nombreP = $alumno->getNombreP();
        $this->_apellidosP = $alumno->getApellidosP();
        $this->_cp = $alumno->getCP();
        $this->_ciudad = $alumno->getCiudad();
        $this->_calle = $alumno->getCalle();

    }

    //contructor vacío
    public function __construct(){

    }
    */

    //Getters y setters
    /**
     * @return int
     */
    public function getID()
    {
        return $this->_id;
    }

    public function setID($id)
    {
        $this->_id = $id;
    }

    /**
     * @return string
     */
    public function getNombreP()
    {
        return $this->_nombreP;
    }

    public function setNombreP($nombreP)
    {
        $this->_nombrep = $nombreP;
    }

    /**
     * @return string
     */
    public function getApellidosP()
    {
        return $this->_apellidosP;
    }

    public function setApellidosP($apellidosP)
    {
        $this->_apellidosP = $apellidosP;
    }

	/**
     * @return int
     */
    public function getCP()
    {
        return $this->_cp;
    }

    public function setCP($cp)
    {
        $this->_cp = $cp;
    }

	/**
     * @return string
     */
    public function getCiudad()
    {
        return $this->_ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->_ciudad = $ciudad;
    }

	/**
     * @return string
     */
    public function getCalle()
    {
        return $this->_calle;
    }

    public function setCalle($calle)
    {
        $this->_calle = $calle;
    }

}

?>