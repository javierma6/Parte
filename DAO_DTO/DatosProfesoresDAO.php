<?php 

class Profesor 
{   
	private $_id;
    private $_nombre;
    private $_apellidos;
	private $_firmaProfesor;
	private $_asignatura;



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
    public function getNombre()
    {
        return $this->_nombre;
    }

    public function setNombre($nombre)
    {
        $this->_nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellidos()
    {
        return $this->_apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->_apellidos = $apellidos;
    }

	/**
     * @return string
     */
    public function getFirmaProfesor()
    {
        return $this->_firmaProfesor;
    }

    public function setFirmaProfesor($firmaProfesor)
    {
        $this->_firmaProfesor = $firmaProfesor;
    }

	/**
     * @return string
     */
    public function getAsignatura()
    {
        return $this->_asignatura;
    }

    public function setAsignatura($asignatura)
    {
        $this->_asignatura = $asignatura;
    }

	

}

?>